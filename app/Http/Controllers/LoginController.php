<?php
namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Proposals;
use App\Speakers;
use App\SpeakerCategories;
use App\SpeakerVideos;
use App\SpeakerTestimonials;
use App\SpeakerTopics;
use App\Categories;
use App\Topics;
use Cracknd\Storage;
use Cracknd\Strings;
use Cracknd\View;


class LoginController extends Controller
{
    public function index(){
        if(!Sentinel::check()){
            return View('loginPanel.login');
        } else
            return redirect('');
    }

    public function verify(){
        try{
            extract(array_map(function($str){return trim(htmlentities(strip_tags($str), ENT_QUOTES));}, $_POST));
            $credenciales = ['email' => $email, 'password' => $password];
            $login = Sentinel::authenticate($credenciales, false);
            if($login)
                $response = ['status' => true, 'message' => 'Inicio de sesión satisfactorio'];
            else
                $response = ['status' => false, 'message' => 'Existe un problema con el usuario/contraseña que haz ingresado'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function logout(){
        Sentinel::logout();
        return redirect('');
    }

    public function home(){
        $categories = Categories::all();
        $countSpeakers = Speakers::get()->count();
        $countProposalsGenerated = Proposals::where('status', 1)->count();
        $countProposalsRequested = Proposals::where('status', 0)->count();
        $fecha_inicio =\Carbon\Carbon::now()->startOfMonth();
        $fecha_fin = \Carbon\Carbon::now()->endOfMonth();
        $countThisMonthGenerated = Proposals::where('created_at', '>=',  $fecha_inicio)->where('created_at', '<=', $fecha_fin)->where('status', 1)->count();
        $countThisMonthRequested =  Proposals::where('created_at', '>=',  $fecha_inicio)->where('created_at', '<=', $fecha_fin)->where('status', 0)->count();
        return View('homeNota.home', compact('categories','countSpeakers', 'countProposalsGenerated', 'countProposalsRequested','countThisMonthGenerated', 'countThisMonthRequested'));
    }

    public function speakers(){
        $speakers = Speakers::all();
        $categories = Categories::all();
        return View('speakers.listado', compact('speakers', 'categories'));
    }

    public function addSpeaker(){
        $categories = Categories::all();
        $topics = Topics::all();
        return View('speakers.add', compact('topics', 'categories'));
    }

    public function saveSpeaker(Request $request){

        if($request->input('id')){
            $elemento = Speakers::where('id', $request->input('id'))->get();
            if($elemento->count()){
                $elemento = $elemento->first();
                $message = 'Speaker updated succesfully';
                $attached = true;
            }
            else{
                $elemento = new Speakers();
                $message = 'Speaker added succesfully';
                $attached = false;
            }
        }
        else{
            $elemento = new Speakers();
            $message = 'Speaker added succesfully';
            $attached = false;
        }

        //echo($request->input('speaker_categories'));

       $categorias = $_POST['categorias'];

        if($attached){
            if($categorias != $elemento->categories){
            $actualCategories = SpeakerCategories::where('id_speaker', $request->input('id'))->get();
                foreach ($actualCategories as $ac) {
                    $ac->delete();
                }
            }

            
            $actualTopics = SpeakerTopics::where('id_speaker', $request->input('id'))->get();
                foreach ($actualTopics as $act) {
                    $act->delete();
                }

            $actualVideos = SpeakerVideos::where('id_speaker', $request->input('id'))->get();
            foreach ($actualVideos as $actV) {
                $actV->delete();
            }

            $actualTestimonials = SpeakerTestimonials::where('id_speaker', $request->input('id'))->get();
            foreach ($actualTestimonials as $actT) {
                $actT->delete();
            }
            
        }

        $elemento->first_name = $request->input('speaker_name');
        $elemento->last_name = $request->input('last_name');
        $elemento->titles = $request->input('speaker_titles');
        $elemento->pronouns = $request->input('speaker_pronouns');
        $elemento->description =  trim($_POST['description']);
        print_r(trim($_POST['description']));
        $elemento->categories = $_POST['categorias'];
        $elemento->startprice = $request->input('price_from');
        $elemento->limitprice = $request->input('price_to');
        //$elemento->tags = $_POST['tags'];
        $elemento->quote = $request->input('speaker_quote');
        $elemento->speaker_photo = $request->input('speaker_photos');
        $elemento->status = $request->input('status');
        $elemento->save();

        $arregloCategorias = explode(",", $_POST['categorias']);
        $arregloTopics = explode(",", $_POST['topics']);
        $arregloVideos = explode(",", $_POST['videos']);
        $arregloTestimonials = json_decode($_POST['testimonials']);

        foreach ($arregloCategorias as $cat) {
            $categories = new SpeakerCategories();
            $categories->id_category = $cat;
            $categories->id_speaker = $elemento->id;
            $categories->status = 1;
            $categories->save();
        }

        foreach ($arregloTopics as $topic) {
            $topics = new SpeakerTopics();
            $topics->id_topic = $topic;
            $topics->id_speaker = $elemento->id;
            $topics->status = 1;
            $topics->save();
        }

        foreach ($arregloVideos as $video) {
            $videoNew = new SpeakerVideos();
            $videoNew->iframe = $video;
            $videoNew->id_speaker = $elemento->id;
            $videoNew->status = 1;
            $videoNew->save();
        }

        foreach ($arregloTestimonials as $test) {
            $testimonialNew = new SpeakerTestimonials();
            $testimonialNew->author = $test->author;
            $testimonialNew->testimonial = $test->testimonial;
            $testimonialNew->id_speaker = $elemento->id;
            $testimonialNew->status = 1;
            $testimonialNew->save();
        }



        $response = ['status' => true, 'message' => $message, 'data' => $elemento->id, 'ou' =>$_POST['speaker_categories']];
        return json_encode($response);
    }

    public function speakerDetail($id, $name){
        $speaker = Speakers::where('id', $id)->get();
        $categories = Categories::all();
        $topics = Topics::all();
        if ($speaker->count()){
            $speaker = $speaker->first();
            $videos = SpeakerVideos::where('id_speaker', $speaker->id)->get();
            $testimonials = SpeakerTestimonials::where('id_speaker', $speaker->id)->get();

            return View('speakers.edit', compact('categories', 'speaker', 'videos', 'testimonials', 'topics'));
        }
        else
            return redirect('');
    }

    public function dropSpeaker(Request $request){
        $elemento = Speakers::where('id', (int)$request->input('id'))->get();
        if($elemento->count()){
            $elemento = $elemento->first();
            $elemento->delete();
            $response = ['status' => true, 'message' => 'Speaker Deleted'];
        } else
            $response = ['status' => false, 'message' => 'Sorry, the system couldn´t found the speaker'];
        return json_encode($response);
    }

    public function speaker($id, $name){
        $speaker = Speakers::where('id', $id)->get();
        $categories = Categories::all();
        $topics = Topics::all();
        if ($speaker->count()){
            $speaker = $speaker->first();
            $videos = SpeakerVideos::where('id_speaker', $speaker->id)->get();
            $testimonials = SpeakerTestimonials::where('id_speaker', $speaker->id)->get();
            $experiences = [];
            return View('homeNota.speaker', compact('categories', 'speaker', 'videos', 'testimonials', 'topics', 'experiences'));
        }
        else
            return redirect('');
    }

    public function proposals(){
        $speakers = Speakers::all();
        $categories = Categories::all();
        $proposals = Proposals::where('status', 1)->get();
        $proposalsSended = Proposals::where('status', 2)->get();
        $topics = Topics::all();
        $numeroPropuestas = $proposals->count();
        $numeroProposalsSended = $proposalsSended->count();
        return View('proposals.listado', compact('speakers', 'categories', 'proposals','topics','numeroPropuestas','numeroProposalsSended'));
    }

    public function addProposal(){
        $speakers = Speakers::all();
        $categories = Categories::all();
        $topics = Topics::all();
        return View('proposals.add', compact('speakers', 'categories','topics'));
    }

    public function saveProposal(Request $request){
        if($request->input('id')){
            $elemento = Proposals::where('id', $request->input('id'))->get();
            if($elemento->count()){
                $elemento = $elemento->first();
                $message = 'Proposal updated succesfully';
                $status = 1;
            }
            else{
                $elemento = new Proposals();
                $message = 'Proposal added succesfully';
                $status = 1;
            }
        }
        else{
            $elemento = new Proposals();
            $message = 'Proposal added succesfully';
            $attached = false;
        }

        //echo($request->input('speaker_categories'));

        $elemento->name = $request->input('name');
        $elemento->client_name = $request->input('client_name');
        $elemento->client_email = $request->input('client_email');
        $elemento->message = $_POST['description'];
        $elemento->categories = $_POST['categorias'];
        $elemento->topics = $_POST['topics'];
        $elemento->custom = $request->input('custom');
        $elemento->status = 1;
        $elemento->save();

        $response = ['status' => true, 'message' => $message, 'data' => $elemento->id];
        return json_encode($response);
    }

    public function proposal($id){
        $proposal = Proposals::where('id', $id)->get();
        $categories = Categories::all();
        $topics = Topics::all();
        $speakers = Speakers::all();
        if ($proposal->count()){
            $proposal = $proposal->first();
            return View('proposals.detail', compact('speakers', 'categories', 'proposal', 'topics'));
        }
        else
            return redirect('');
    }

    public function proposalEdit($id){
        $proposal = Proposals::where('id', $id)->get();
        $categories = Categories::all();
        $topics = Topics::all();
        $speakers = Speakers::all();
        if ($proposal->count()){
            $proposal = $proposal->first();
            return View('proposals.edit', compact('speakers', 'categories', 'proposal', 'topics'));
        }
        else
            return redirect('');
    }

    public function talent(){
        $categories = Categories::all();
        $speakers = Speakers::all();
        return View('homeNota.talent', compact('categories','speakers'));
    }

    public function talentByCat($arregloCategorias){
        $categories = Categories::all();
        //$speakers = Speakers::all();
        $speakers = array();
        $arregloCategorias = explode(',', str_replace('categories=', "", $arregloCategorias));
        foreach ($arregloCategorias as $cat) {
           $speakersCategory = SpeakerCategories::where('id_category', $cat)->get();
           foreach ($speakersCategory as $sc) {
                if(!in_array($sc->id_speaker, $speakers))
                    array_push($speakers, $sc->id_speaker);
           }
        }
        
        return View('homeNota.talentcat', compact('categories','speakers','arregloCategorias'));
    }
}

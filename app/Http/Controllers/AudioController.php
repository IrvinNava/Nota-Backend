<?php
namespace App\Http\Controllers;

use App\Audio;
use App\Categoria;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AudioController extends Controller
{
    public function index(){
        $categoria = Categoria::find(2);
        $audios = Audio::get();
        return view('audio.listado', compact('categoria', 'audios'));
    }

    public function detalle($id, $titulo){
        $audio = Audio::where('id', (int)$id)->where('status', 1)->get();
        if($audio->count()){
            $audio = $audio->first();
            $media = ($audio->media_collection->count()) ? $audio->media_collection->first() : null;
            if($audio->playlist_id){
                $playlist = Playlist::where('id', $audio->playlist_id)->get()->first();
            }
            return View('audio.detalle', compact('audio', 'media', 'playlist'));
        } else
            return redirect('audios');
    }
}

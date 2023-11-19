<?php
namespace App\Http\Controllers;

use App\Categoria;
use App\Galeria;
use App\Playlist;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function index(){
        $categoria = Categoria::find(1);
        $galerias = Galeria::get();
        return view('imagen.listado', compact('categoria', 'galerias'));
    }

    public function detalle($id, $titulo){
        $galeria = Galeria::where('id', (int)$id)->where('status', 1)->get();
        if($galeria->count()){
            $galeria = $galeria->first();
            $media = ($galeria->media_collection->count()) ? $galeria->media_collection->first() : null;
            if($galeria->playlist_id){
                $playlist = Playlist::where('id', $galeria->playlist_id)->get()->first();
            }

            /*$contentDetails = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.Helper::getYoutubeCode($code).'&key='.'AIzaSyC20kcmb2-x4F-4i7fAs69vY63qmf1Lu-M'.'&part=snippet,contentDetails'));
                if($contentDetails->items[0]){
                    $galeria->counter = $contentDetails->items[0]->statistics->viewCount;
                }*/

           $subcategoria = $galeria->getSubcategoriaPrincipal() ?  $galeria->getSubcategoriaPrincipal()->nombre : '';
            return View('imagen.detalle', compact('galeria', 'media', 'playlist', 'subcategoria'));
        } else
            return redirect('audios');
    }
}

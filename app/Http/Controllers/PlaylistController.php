<?php
namespace App\Http\Controllers;

use App\Playlist;
use App\Audio;
use App\Galeria;
use App\Texto;

class PlaylistController extends Controller
{
    /*public function index(){
        $categoria = Pla::find(3);
        $textos = Texto::get();
        return view('texto.listado', compact('categoria', 'textos'));
    }*/

    public function detalle($id, $titulo){
        $playlist = Playlist::where('id', (int)$id)->where('status', 1)->get();
        if($playlist->count()){
            $playlist = $playlist->first();
            $audios = Audio::where('playlist_id', (int)$id)->where('status', 1)->get();
            $textos = Texto::where('playlist_id', (int)$id)->where('status', 1)->get();
            $galerias = Galeria::where('playlist_id', (int)$id)->where('status', 1)->get();
            return view('playlist.detalle', compact('playlist','audios', 'textos', 'galerias'));
        } else
            return redirect('');
    }
}

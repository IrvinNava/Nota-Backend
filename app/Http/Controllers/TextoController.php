<?php
namespace App\Http\Controllers;

use App\Categoria;
use App\Texto;
use App\Playlist;

class TextoController extends Controller
{
    public function index(){
        $categoria = Categoria::find(3);
        $textos = Texto::get();
        return view('texto.listado', compact('categoria', 'textos'));
    }

    public function detalle($id, $titulo){
        $texto = Texto::where('id', (int)$id)->where('status', 1)->get();
        if($texto->count()){
            $texto = $texto->first();
            if($texto->playlist_id){
                $playlist = Playlist::where('id', $texto->playlist_id)->get()->first();
            }
            return view('texto.detalle', compact('texto','playlist'));
        } else
            return redirect('texto');
    }
}

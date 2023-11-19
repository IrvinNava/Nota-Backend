<?php

namespace App\Http\Controllers;
use App\ContenidoIndexado;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
   /* public function busqueda() {
        $busqueda = (isset($_GET['criterio'])) ? $_GET['criterio'] : null;
        $resultados = ContenidoIndexado::select(['id', 'object_type', 'object_id'])
            ->whereRaw("MATCH (titulo, contenido) AGAINST ('$busqueda')")
            ->addSelect(DB::raw("MATCH (titulo, contenido) AGAINST ('$busqueda' in BOOLEAN MODE) AS score"))
            ->orderBy('score', 'DESC')
            ->get();
        return View('resultados', compact('busqueda', 'resultados'));
    }

    public function timeline() {
        return View('timeline.timeline');
    }

    public function detalleTimeline() {
        return View('timeline.timeline-detalle');
    }

    public function amparoOnline() {
        return View('amparo-online');
    }

    public function playlists() {
        $playlists = Playlist::where('status', 1)->get();
        return View('playlist.listado', compact('playlists'));
    }*/
    

}

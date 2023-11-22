<?php
namespace App\Http\Controllers;

use App\Timeline;
use App\TimelineMedia;
use App\Anios;

use Carbon\Carbon;

class TimelineController extends Controller
{
    public function timeline() {
        $registros = Timeline::getTimelineData();
        $activo = 0;
        return View('timeline.timeline', compact('registros', 'activo'));
    }

    public function timelineDetalle($anio, $id) {
        $registros = Timeline::getByYear($id, $anio);
        $prev = Anios::getPrevious($id);
        $last = Anios::getNext($id);
        return View('timeline.timeline-detalle', compact('registros', 'anio', 'prev', 'last'));
    }

    public function timelineDetalleEvento() {
        return View('timeline.timeline-detalle-evento');
    }

    public function timelineGaleria($id) {
        $evento = Timeline::where('id', $id)->get();
        $links = [];
        $galeria = [];
        if ($evento->count()){
            $evento = $evento->first();
            $links = Timeline::getLinks($id);
            $galeria = TimelineMedia::where('timeline_id', $id)->get();
        }
        return View('timeline.galeria', compact('id', 'evento', 'links', 'galeria'));
    }

}

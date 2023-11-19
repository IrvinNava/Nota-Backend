<?php
namespace App\Http\Controllers;

use App\Audio;
use App\Categoria;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExposicionesDigitalesController extends Controller
{
    public function index(){
        return view('exposiciones.exposiciones');
    }

    public function nucleosListado(){
        return view('exposiciones.nucleos-listado');
    }

    public function documentosFundacionales(){
        return view('exposiciones.documentos-listado');
    }

    public function nucleoDetalle(){
        return view('exposiciones.detalle');
    }

    // Esposiciones Estáticas
    public function exposicion(){
        return view('exposiciones.exposicion');
    }
    public function creditos(){
        return view('exposiciones.creditos');
    }
    public function nucleoUno(){
        return view('exposiciones.nucleo-1');
    }
    public function nucleoDos(){
        return view('exposiciones.nucleo-2');
    }
    public function nucleoTres(){
        return view('exposiciones.nucleo-3');
    }
    public function nucleoCuatro(){
        return view('exposiciones.nucleo-4');
    }

    public function nucleoUnoDetalleUno(){ return view('exposiciones.detalle-1-1'); }
    public function nucleoUnoDetalleDos(){ return view('exposiciones.detalle-1-2'); }
    public function nucleoUnoDetalleTres(){ return view('exposiciones.detalle-1-3'); }
    public function nucleoUnoDetalleCuatro(){ return view('exposiciones.detalle-1-4'); }
    public function nucleoUnoDetalleCinco(){ return view('exposiciones.detalle-1-5'); }

    public function nucleoDosDetalleUno(){ return view('exposiciones.detalle-2-6'); }
    public function nucleoDosDetalleDos(){ return view('exposiciones.detalle-2-7'); }
    public function nucleoDosDetalleTres(){ return view('exposiciones.detalle-2-8'); }
    public function nucleoDosDetalleCuatro(){ return view('exposiciones.detalle-2-9'); }
    public function nucleoDosDetalleCinco(){ return view('exposiciones.detalle-2-10'); }
    public function nucleoDosDetalleSex(){ return view('exposiciones.detalle-2-11'); }

    public function nucleoTresDetalleUno(){ return view('exposiciones.detalle-3-12'); }
    public function nucleoTresDetalleDos(){ return view('exposiciones.detalle-3-13'); }
    public function nucleoTresDetalleTres(){ return view('exposiciones.detalle-3-14'); }
    public function nucleoTresDetalleCuatro(){ return view('exposiciones.detalle-3-15'); }
    public function nucleoTresDetalleCinco(){ return view('exposiciones.detalle-3-16'); }

    public function nucleoCuatroDetalleUno(){ return view('exposiciones.detalle-4-17'); }
    public function nucleoCuatroDetalleDos(){ return view('exposiciones.detalle-4-18'); }
    public function nucleoCuatroDetalleTres(){ return view('exposiciones.detalle-4-19'); }
    public function nucleoCuatroDetalleCuatro(){ return view('exposiciones.detalle-4-20'); }
    public function nucleoCuatroDetalleCinco(){ return view('exposiciones.detalle-4-21'); }

}

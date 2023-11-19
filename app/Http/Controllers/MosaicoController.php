<?php

namespace App\Http\Controllers;

use App\MosaicoRegistro;
use App\MosaicoMedia;
use App\MosaicoMediaCollection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MosaicoController extends Controller
{
    public function index(){
        $registros = MosaicoRegistro::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('30anios', compact('registros'));
    }

    public function addMosaico(Request $request){
    	try {
            $newMosaico = new MosaicoRegistro();
            $newMosaico->nombre_visitante = $request->input('input-nombre-visitante');
            $newMosaico->edad_visitante = $request->input('input-edad-visitante');
            $newMosaico->ciudad_residencia = $request->input('input-ciudad-residencia');
            $newMosaico->fecha_visita = Carbon::parse(str_replace('/', '-', $request->input('input-fecha-visita')));
            $newMosaico->evento_visita = $request->input('input-evento-visita');
            $newMosaico->motivo_visita = $request->input('input-motivo-visita');
            $newMosaico->nombre_fotografo = $request->input('input-nombre-fotografo');
            $newMosaico->detalle_visita = $request->input('input-detalle-visita');
            $newMosaico->detalle_volviste = $request->input('input-detalle-volviste');
            $newMosaico->volverias = $request->input('input-volverias');
            $newMosaico->recomendarias = $request->input('input-recomendarias');
            $newMosaico->status = 0;
            $newMosaico->save();

            //Agregamos la relación con el mosaico extendido
            $collection = new MosaicoMediaCollection();
            $collection->registro_id = $newMosaico->id;
            $collection->media_id = $request->id_cover;
            $collection->save();

            //Agregamos la relación con el mosaico
            $collection = new MosaicoMediaCollection();
            $collection->registro_id = $newMosaico->id;
            $collection->media_id = $request->id_thumbnail;
            $collection->save();

            //Activamos y colocamos que es la imagen expandida =2
            $media = MosaicoMedia::where('id', $request->id_cover)->get();
            if($media->count()){
            	$media = $media->first();
            	$media->status = 1;
            	$media->type = 2;
            	$media->save();
            }
            //Activamos y colocamos que es el mosaico = 3
            $media = MosaicoMedia::where('id', $request->id_thumbnail)->get();
            if($media->count()){
            	$media = $media->first();
            	$media->status = 1;
            	$media->type = 3;
            	$media->save();
            }
        
            $response = ['status' => true, 'message' => 'Se ha registrado tu imagen. Esta pasará por un proceso de aprobación, muy pronto podrás verla disponible. Mientras tanto veamos experiencias de otros visitantes:', 'data' => $newMosaico->id];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

}

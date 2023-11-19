<?php

namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Timeline extends Model
{
    use SoftDeletes;

    protected $table = "timeline";
    protected $dates = ['deleted_at'];

    public static function get($status,$items){
        if(!$items)
            return Timeline::where('status', $status)->orderBy('created_at', 'DESC')->get();
        $resultados = Timeline::where('status', $status)->get();
        if($resultados->count() >= $items)
            return $resultados->take($items);
        else
            return $resultados;
    }

    public function getURL(){
        return url('timeline/galeria/'.$this->id);
    }

    public static function getAnio(){
        return url('timeline/galeria/'.$this->id);
    }

    public static function getTimelineData(){
        return Timeline::where('status', 1)->orderBy('fecha_evento', 'ASC')->groupBy('anio_id')->get();
    }

    public static function getByYear($anio_id){
        return Timeline::where('anio_id', $anio_id)->where('cover','<>', 'https://museoamparo.online/img/museo-amparo-puebla-placeholder-black.png')->orderBy('fecha_evento', 'ASC')->where('status', 1)->get();
    }

    public static function listaTimeline(){
        return Timeline::where('status', 1)->where('cover','<>', 'https://museoamparo.online/img/museo-amparo-puebla-placeholder-black.png')->where('cover','<>', NULL)->groupBy('anio_id')->orderBy('anio_id', 'DESC')->get();
    }

    public function indexar(){
        $object_type = 'App\\Timeline';
        $contenido_indexado = ContenidoIndexado::where('object_type', $object_type)->where('object_id', $this->id)->get();
        if(!$contenido_indexado->count()){
            $contenido_indexado = new ContenidoIndexado();
            $contenido_indexado->object_type = $object_type;
            $contenido_indexado->object_id = $this->id;
        } else
            $contenido_indexado = $contenido_indexado->first();
        $contenido_indexado->titulo = $this->titulo;

        $autores = implode(',', $this->autores->map(function ($autor){ return "$autor->nombre $autor->apellidos"; })->toArray());
        $etiquetas = implode(',', $this->etiquetas->map(function ($etiqueta){ return $etiqueta->nombre; })->toArray());

        $contenido = Helper::clean_string("$this->descripcion $autores $etiquetas");
        $contenido_indexado->contenido = $contenido;
        $contenido_indexado->save();
    }

    public function autores(){
        return $this->belongsToMany(
            Autor::class,
            'timeline_autores',
            'timeline_id',
            'autor_id'
        )->orderBy('autores.tipo_id');
    }

    public function etiquetas(){
        return $this->belongsToMany(
            Tag::class,
            'timeline_tags',
            'timeline_id',
            'tag_id'
        );
    }

    public function colaboraciones(){
        return $this->belongsToMany(
            Colaboracion::class,
            'timeline_colaboraciones',
            'timeline_id',
            'colaboracion_id'
        );
    }

    public static function getLinks($id){
        return \App\TimelineLinks::where('timeline_id', $id)->get();
    }

    public function categorias(){
        return false;
    }

}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventoTipo extends Model
{
    use SoftDeletes;

    protected $table = "eventos_tipos";
    protected $dates = ['deleted_at'];

    public static function getNombre($id){
    	$tipo_evento = EventoTipo::where('id', $id)->get();
    	return $nombre = ($tipo_evento->count()) ? $tipo_evento->first()->nombre : '' ;
    }
}

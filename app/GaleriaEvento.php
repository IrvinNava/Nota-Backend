<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriaEvento extends Model
{
    use SoftDeletes;

    protected $table = "galerias_eventos";
    protected $dates = ['deleted_at'];

    public static function getNombre($id){
    	$evento = Evento::where('id', $id)->get();
    	return $nombre = ($evento->count()) ? $evento->first()->nombre : '' ;
    }
}

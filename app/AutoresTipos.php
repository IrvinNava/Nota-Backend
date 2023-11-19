<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AutoresTipos extends Model
{
    use SoftDeletes;

    protected $table = "autores_tipos";
    protected $dates = ['deleted_at'];

    public static function getNombre($id){
    	$tipo = AutoresTipos::where('id', $id)->get();
    	return $nombre = ($tipo->count()) ? $tipo->first()->titulo : '' ;
    }

}

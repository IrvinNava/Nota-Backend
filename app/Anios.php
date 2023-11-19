<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anios extends Model
{
    use SoftDeletes;

    protected $table = "anios";
    protected $dates = ['deleted_at'];

    public static function getActivos()
    {
        return Anios::where('status', 1)->get();
    }

 	public function registros(){
        return $this->hasMany(Timeline::class, 'anio_id', 'id')->latest()->get()->unique('anio_id');
    }

    public static function getPrevious($anio_id){
    	$min = Timeline::where('status', 1)->min('anio_id');
    	if ($anio_id >= $min){
    		$resultados = Anios::where('id', $anio_id - 1)->get();
    		$registro = ($resultados->count()) ? $resultados->first() : '';
    	}
    	else
    		$registro = false;
    	return $registro;
    }

    public static function getNext($anio_id){
    	$max = Timeline::where('status', 1)->max('anio_id');
    	if ($anio_id === $max){
    		$registro = false;
    	}
    	if ($anio_id < $max){
    		$resultados = Anios::where('id', $anio_id + 1)->get();
    		$registro = ($resultados->count()) ? $resultados->first() : '';
    	}
    	else
    		$registro = false;
    	return $registro;
    }

}

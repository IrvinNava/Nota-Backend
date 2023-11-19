<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colaboracion extends Model
{
    use SoftDeletes;

    protected $table = "colaboraciones";
    protected $dates = ['deleted_at'];


    public static function list($list){
        $colaboraciones = implode(', ', $list->map(function ($colaboracion){ return str_replace(',', '#', $colaboracion->titulo); })->toArray());
        $ultimaComa = strrpos($colaboraciones, ",");
        if($ultimaComa!=0)
            $cadenaColaboraciones = substr_replace($colaboraciones,' y ',$ultimaComa, 1);
        else
            $cadenaColaboraciones = $colaboraciones;
        return str_replace('#', ',', $cadenaColaboraciones);
    }

}

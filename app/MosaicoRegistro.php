<?php

namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class MosaicoRegistro extends Model
{
    use SoftDeletes;

    protected $table = "mosaico_registro";
    protected $dates = ['deleted_at'];

    public static function get($status,$items){
        if(!$items)
            return MosaicoRegistro::where('status', $status)->orderBy('created_at', 'DESC')->get();
        $resultados = MosaicoRegistro::where('status', $status)->get();
        if($resultados->count() >= $items)
            return $resultados->take($items);
        else
            return $resultados;
    }

    public function media_collection(){
        return $this->belongsToMany(
            MosaicoMedia::class,
            'mosaico_media_collection',
            'registro_id',
            'media_id'
        );
    }

}

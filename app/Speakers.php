<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speakers extends Model
{
    use SoftDeletes;

    protected $table = "speakers";
    protected $dates = ['deleted_at'];

    public static function getNombre($id){
    	$speaker = Speakers::where('id', $id)->get();
    	return $nombreCompleto = ($speaker->count()) ? $speaker->first()->first_name.' '.$speaker->first()->last_name : '' ;
    }

    public static function getPicture($id){
    	$speaker = Speakers::where('id', $id)->get();
    	return $nombreCompleto = ($speaker->count()) ? $speaker->first()->speaker_photo : '' ;
    }
}

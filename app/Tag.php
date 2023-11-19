<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = "tags";
    protected $dates = ['deleted_at'];

    public static function sync($etiqueta){
        $banned_words = ['', 'de', 'la'];
        if(array_search($etiqueta, $banned_words) === false){
            $tag = Tag::where('nombre', $etiqueta)->get();
            if(!$tag->count()){
                $tag = new Tag();
                $tag->nombre = $etiqueta;
                $tag->slug = Str::slug($etiqueta);
                $tag->status = 1;
                $tag->save();
            } else
                $tag = $tag->first();
            return $tag->id;
        } else
            return false;
    }
}

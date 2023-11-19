<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = "categorias";
    protected $dates = ['deleted_at'];

    public static function get($status = 1){
        return Categoria::where('status', $status)->orderBy('orden')->get();
    }

    public function url(){
        $nombre = Str::slug(html_entity_decode($this->nombre));
        return url("$nombre");
    }

    public function subcategorias(){
        return $this->hasMany(Subcategoria::class, 'categoria_id', 'id');
    }
}

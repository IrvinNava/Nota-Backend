<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ContenidoIndexado extends Model
{
    protected $table = "contenido_indexado";

    public function recurso(){
        return $this->hasOne($this->object_type, 'id', 'object_id');
    }
}

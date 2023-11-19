<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use SoftDeletes;

    protected $table = "autores";
    protected $dates = ['deleted_at'];

    public function getFullNameAttribute()
    {
        return html_entity_decode($this->nombre . ' ' . $this->apellidos);
    }
}

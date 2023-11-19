<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextoEventoTipo extends Model
{
    use SoftDeletes;

    protected $table = "textos_eventos_tipos";
    protected $dates = ['deleted_at'];
}

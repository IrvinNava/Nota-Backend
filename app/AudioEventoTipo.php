<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioEventoTipo extends Model
{
    use SoftDeletes;

    protected $table = "audios_eventos_tipos";
    protected $dates = ['deleted_at'];
}

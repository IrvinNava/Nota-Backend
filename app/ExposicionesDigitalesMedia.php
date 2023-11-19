<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExposicionesDigitalesMedia extends Model
{
    use SoftDeletes;

    protected $table = "exposiciones_digitales_media";
    protected $dates = ['deleted_at'];

}

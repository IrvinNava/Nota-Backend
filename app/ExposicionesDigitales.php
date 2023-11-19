<?php
namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ExposicionesDigitales extends Model
{
    use SoftDeletes;

    protected $table = "exposiciones_digitales";
    protected $dates = ['deleted_at'];
}

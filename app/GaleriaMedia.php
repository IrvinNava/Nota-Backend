<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriaMedia extends Model
{
    use SoftDeletes;

    protected $table = "galerias_media";
    protected $dates = ['deleted_at'];
}

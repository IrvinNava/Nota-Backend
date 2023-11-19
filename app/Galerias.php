<?php
namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Galerias extends Model
{
    use SoftDeletes;

    protected $table = "nucleos_galerias";
    protected $dates = ['deleted_at'];

}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Referencia extends Model
{
    use SoftDeletes;

    protected $table = "referencias";
    protected $dates = ['deleted_at'];
}

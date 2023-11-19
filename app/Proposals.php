<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposals extends Model
{
    use SoftDeletes;

    protected $table = "proposals";
    protected $dates = ['deleted_at'];

}

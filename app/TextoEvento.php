<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextoEvento extends Model
{
    use SoftDeletes;

    protected $table = "textos_eventos";
    protected $dates = ['deleted_at'];
}

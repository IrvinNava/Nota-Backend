<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextoMedia extends Model
{
    use SoftDeletes;

    protected $table = "textos_media";
    protected $dates = ['deleted_at'];
}

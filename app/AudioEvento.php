<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioEvento extends Model
{
    use SoftDeletes;

    protected $table = "audios_eventos";
    protected $dates = ['deleted_at'];
}

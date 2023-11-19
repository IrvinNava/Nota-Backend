<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioMedia extends Model
{
    use SoftDeletes;

    protected $table = "audios_media";
    protected $dates = ['deleted_at'];
}

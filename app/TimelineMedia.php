<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimelineMedia extends Model
{
    use SoftDeletes;

    protected $table = "timeline_media";
    protected $dates = ['deleted_at'];

}

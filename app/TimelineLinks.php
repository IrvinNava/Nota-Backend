<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimelineLinks extends Model
{
    use SoftDeletes;

    protected $table = "timeline_links";
    protected $dates = ['deleted_at'];

}

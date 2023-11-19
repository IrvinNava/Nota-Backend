<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakerTopics extends Model
{
    use SoftDeletes;

    protected $table = "speaker_topics";
    protected $dates = ['deleted_at'];
}

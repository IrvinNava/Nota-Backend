<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakerCategories extends Model
{
    use SoftDeletes;

    protected $table = "speaker_categories";
    protected $dates = ['deleted_at'];
}

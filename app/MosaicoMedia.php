<?php

namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class MosaicoMedia extends Model
{
    use SoftDeletes;

    protected $table = "mosaico_media";
    protected $dates = ['deleted_at'];
}

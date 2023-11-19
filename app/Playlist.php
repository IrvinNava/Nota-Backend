<?php
namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Playlist extends Model
{
	use SoftDeletes;

    protected $table = "playlists";

    public function getUrl(){
        return url("playlist/$this->id/" . Str::slug(html_entity_decode($this->titulo)));
    }
}

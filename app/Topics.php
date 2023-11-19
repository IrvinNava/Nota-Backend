<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $table = "topics";

    public static function getName($id)
    {
    	$topics = Topics::where('id', $id)->get();
    	if($topics->count())
        	return $topics->first()->title;
        else
        	return 'Not Found';
    }
}

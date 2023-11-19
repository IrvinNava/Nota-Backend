<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    public static function getName($id)
    {
    	$category = Categories::where('id', $id)->get();
    	if($category->count())
        	return $category->first()->title;
        else
        	return 'Not Found';
    }
}

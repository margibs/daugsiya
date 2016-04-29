<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HomeImage extends Model
{
    protected $fillable = [
    			'image',
    			'link',
    			'position'
    		];

    public static function getHomeImage()
    {
    	$data = DB::table('home_images')
    						->select('*')
    						->get();
    	return $data;
    }
}

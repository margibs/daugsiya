<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class HomeImage extends Model
{
     use SoftDeletes;
     
    protected $fillable = [
    			'image',
    			'link',
    			'position'
    		];

    protected $dates = ['deleted_at'];

    public static function getHomeImage()
    {
    	$data = DB::table('home_images')
    						->select('*')
    						->get();
    	return $data;
    }
}

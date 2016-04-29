<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class CasinoBanner extends Model
{
    protected $table = 'casino_banners';


    public static function getArticles()
    {
    	$data = DB::table('casino_banners')
    						->select('*')
    						->where('casino_banners.banner_type', '=', 1)
    						->where('casino_banners.show_banner', '=', 1)
    						->get();
    	return $data;
    }

    public static function getSkypsCrapper() 
    {
    	$data = DB::table('casino_banners')
    						->select('*')
    						->where('casino_banners.banner_type', '=', 2)
    						->where('casino_banners.show_banner', '=', 1)
    						->get();
    	return $data;
    }

    public static function getCasino() 
    {
    	$data = DB::table('casino_banners')
    						->select('*')
    						->where('casino_banners.banner_type', '=', 3)
    						->get();
    	return $data;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Detail extends Model
{
    //

	protected $table ="user_details";

    public function user(){

    	return $this->belongsTo('App\User');
    }
}

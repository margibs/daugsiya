<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //

    protected $fillable = ['friend_id', 'user_id'];

	public function friend(){
		return $this->belongsTo('App\User', 'friend_id')->with('user_detail')->with('user_session');
	}

	public function user(){
		return $this->belongsTo('App\User', 'user_id')->with('user_detail')->with('user_session');
	}

}

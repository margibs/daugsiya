<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
    		'user_id',
    		'type',
    		'content_id'
    	];

    static function addActivity($data, $type) {
    	 $activities = UserActivity::firstOrCreate([
                'user_id' => $data['user_id'],
                'content_id' => $data['post_id'],
                'type' => $type
            ]);
    	 return $activities;
    }

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function favorite() {
    	return $this->belongsTo('App\Model\Post', 'content_id')->where('type', 1);
    }

    public function prize() {
    	return $this->belongsTo('App\Model\Prize', 'content_id')->where('type', 3);
    }
}

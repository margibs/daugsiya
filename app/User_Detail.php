<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Detail extends Model
{
    //

	protected $table ="user_details";
	//public $url = url();
	//protected $profile_picture;

	public $default_image = '/user_uploads/default_image/default_01.png';


/*	public function getProfilePictureAttribute($value){
		return $this->attribute['user_id'];
	}*/

/*	public function getProfilePictureAttribute($value)
	{
		return $value ? url().'/user_uploads/user_'.$this->user_id.'/'.$value : $this->default_image;
	}
*/
    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function userPicture2020() {
    	return $this->profile_picture ? url().'/user_uploads/user_'.$this->user_id.'/2020/'.$this->profile_picture : $this->default_image;
    }

    public function userPicture4545() {
    	return $this->profile_picture ? url().'user_uploads/user_'.$this->user_id.'/4545/'.$this->profile_picture : $this->default_image;
    }

    public function userPicture5050() {
    	return $this->profile_picture ? url().'/user_uploads/user_'.$this->user_id.'/5050/'.$this->profile_picture : $this->default_image;
    }

    public function userPicture() {
    	return $this->profile_picture ? url().'/user_uploads/user_'.$this->user_id.'/'.$this->profile_picture : $this->default_image;
    }

     //NEED TO ADD TO SERVER
    public function fullName() {
        return $this->firstname .' '. $this->lastname;
    }

    public function messageChecker($message) {
        $value = str_contains('This is my name', 'my');
    }




}

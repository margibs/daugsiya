<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Session extends Model
{
    //

    protected $table = 'user_sessions';

    protected $fillable = ['user_id'];
}

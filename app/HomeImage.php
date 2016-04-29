<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $fillable = [
    			'image',
    			'link',
    			'position'
    		];
}
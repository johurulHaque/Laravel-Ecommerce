<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	//relation ship a aigula fill na thakla kaj korba na
    public $fillable = [
    	'name',
    	'image',
    	'priority',
    	'short_name',
    	'no',
    	'type',
    ];
}

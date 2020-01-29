<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{	//create relation
	 public function division(){
    	return $this -> belongsTo(Division::class);
    }
    
}

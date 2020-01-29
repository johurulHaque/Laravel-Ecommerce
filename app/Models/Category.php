<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Category extends Model
{	
	//written in this table
    public function parent(){
    	return $this -> belongsTo(Category::class,'parent_id');
    }
    //written in another table
    public function products(){
    	return $this -> hasMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//every product have many image    
     public function images()
    {	
    	//one to many relationship
        // return $this->hasMany('App\ProductImage');
        return $this->hasMany(ProductImage::class);
    }

    //one product one category
    //product table ai category model ar kicu thaka such ac category_id
    public function category(){
    	return $this->belongsTo(Category::class);//dont need to pass any pivet(Category::class,'main_id') .caz its already have
    }
     
     //one product one brand
    //product table ai category model ar kicu thaka such ac brand_id
    public function brand(){
    	return $this->belongsTo(Brand::class);//dont need to pass any pivet(Category::class,'main_id') .caz its already have
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{	//for readabily .read without goes database
    public $fillable = [
    	'user_id',
    	'ip_address',
        'payment_id',
    	'name',
    	'phone_no',
    	'shipping_address',
    	'email',
    	'message',
    	'is_paid',
    	'is_seen_by_admin',
    	'is_completed',
        'transaction_id',
    ];

    public function user(){
        // 19@10.48
    	return $this->belongsTo(User::class);	
    }

    //order have how many cart
    //when user confirm 
    public function carts(){
    	return $this->hasMany(Cart::class);	
    }

    public function payment(){
        return $this->belongsTo(Payment::class);   
    }

}

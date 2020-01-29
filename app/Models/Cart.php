<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Cart extends Model
{
    //for readabily .read without goes database
    public $fillable = [
    	'product_id',
    	'product_quantity',
    	'user_id',
    	'order_id',
    	'ip_address',
    ];

    public function user(){
    	return $this->belongsTo(User::class);	
    }

    public function product(){
    	return $this->belongsTo(Product::class);	
    }

    public function order(){
    	return $this->belongsTo(Order::class);	
    }
    
    public static function totalCarts(){
        //auth check orWhere no need & ip also no need
        if(Auth::check()){
            $carts = Cart::where('user_id','=',Auth::id())
                    ->where('order_id','=',NULL)//jadar order hoy nai order_id null
                    ->orWhere('ip_address','=',request()->ip())
                    ->get();//all cart item
        }else{
            $carts = Cart::where('ip_address','=',request()->ip())
                ->where('order_id','=',NULL)
                ->get();//all cart item
        }
       
        return $carts;
    }

    public static function totalItems(){
        if(Auth::check()){
            $carts = Cart::where('user_id','=',Auth::id())
                    ->where('order_id','=',NULL)
                    // ->orWhere('ip_address','=',request()->ip())
                    ->get();//all cart item
        }else{
            $carts = Cart::where('ip_address','=',request()->ip())
                    ->where('order_id','=',NULL)
                    ->get();//all cart item
        }
        // $carts =Cart::totalCarts();
        $total_item = 0;
        foreach ($carts as $cart) {
            $total_item += $cart->product_quantity;
        }
        return $total_item;
    }
}

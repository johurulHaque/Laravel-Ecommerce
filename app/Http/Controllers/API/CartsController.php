<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Order;
use Auth;

class CartsController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 19@24.54
        $this ->validate($request,[
            'product_id' => 'required'
        ],['product_id.required' => 'product id is requered']);


       if(Auth::check()){
            $carts = Cart::where('user_id','=',Auth::id())
                    ->where('product_id','=',$request->product_id)
                    // ->orWhere('ip_address','=',request()->ip())//no need ip address
                    ->first();
        }else{
            $carts = Cart::where('ip_address','=',request()->ip())
                    ->where('product_id','=',$request->product_id)
                    ->first();
        }
        //if a product already in cart then just increment the quantity
        if (!is_null($carts)) {
          $carts->increment('product_quantity');//$cart celo if require
        }else{
            $cart = new Cart();
                if(Auth::check()){
                $cart->user_id=Auth::id();
            }
        //user not register then also can order
        $cart->ip_address = request()->ip();
        $cart->product_id = $request->input('product_id');
        $cart->save();
        }
        
        
        return json_encode(['status' => 'success','Message' => 'iteam added to cart','totalItems' => Cart::totalItems()]);
    }


}

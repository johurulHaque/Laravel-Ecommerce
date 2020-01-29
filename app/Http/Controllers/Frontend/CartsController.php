<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Order;
use Auth;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('frontend.pages.carts');
    }

    

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
        
        
        session()->flash('success','product hasbeen added to cart successfully');
        return back();
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        if(!is_null($cart)){
            $cart->product_quantity = $request->product_quantity;
            $cart ->save();
        }else {
            return redirect()->route('carts');
        } 

        // flash
        return back();       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        if(!is_null($cart)){
            $cart->delete();
        }else{
            return redirect()->route('cart');
        }
        // session
        return back();
    }
}

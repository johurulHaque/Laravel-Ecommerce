<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
		$products = Product::orderBy('id','desc')->paginate(5);
		return view('frontend.pages.product.index')->withProducts($products);
	}
// there was slug instead id.i create bu think
// there was slug instead id.i create bu think
	 public function show($id){
		$product =Product::where('id',$id)->first();

		if (!is_null($product)) {
			return view('frontend.pages.product.show')->withProduct($product);		
		}else{
			//have to implement on message.blade.php
			session()->flash('errors','Sorry the are is no product!!');
			return redirect()->route('products');
		}
		
	}
}

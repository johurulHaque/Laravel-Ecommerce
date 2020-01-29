<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\User;

// use Illuminate\Support\Facades\Request;
class PagesController extends Controller
{
//practise 
//practise 
//practise 


	public function show(Request $request){
       // dd($request->all());

       $user = $request->only('name');
       // $user = $request->path();
       return view('work2',compact('user'));
    }

    public function master(){
    	$user=User::all();
    	// dd($user);
       return view('master',compact('user'));
    }

    public function child1(){
       return view('child1');
    }

    public function child2(){
       return view('child2');
    }

    public function in(){
       return view('work2');
    }



		



// project
// 
// 
// 
// 
	// public function index(){
	// 	$products = Product::orderBy('id','desc')->paginate(3);
	// 	return view('frontend.pages.index')->withProducts($products);
	// }
	
	// public function contact(){
	// 	return view('fronend.pages.contact');
	// }
// vs anyone fullfill the criteria
// public function search(Request $request){
// 		$search = $request -> search;
// 		$product = Product::orWhere('title','like','%'.$search.'%')
// 					->orWhere('title','like','%'.$search.'%')
// 					->orWhere('slug','like','%'.$search.'%')
// 					->orWhere('price','like','%'.$search.'%')
// 					->orWhere('quantity','like','%'.$search.'%')
// 					->orderBy('id','desc')
// 					->paginate(5);
// 		return view('frontend.pages.product.search',compact('search','product'));
// 	}

	
}

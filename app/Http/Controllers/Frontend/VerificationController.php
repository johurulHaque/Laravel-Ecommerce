<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class VerificationController extends Controller
{
    public function verify($token){
    	$user = User::where('remember_token', '=' ,$token) ->first();
    	if(!is_null($user)){
    		$user -> status = 1;
    		$user ->remember_token =null;//register user so no need remember_token
    		$user -> save(); //must save onDB
    	session()->flash('success','You are registration successfully.Log in!!!'); 
		return redirect('login');    		
    	}else{
    		session()->flash('errors','Sorry ..something is going wrong!!!'); 
    		return redirect('/');
    	}
    	
    }
}

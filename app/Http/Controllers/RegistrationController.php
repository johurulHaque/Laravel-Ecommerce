<?php

namespace App\Http\Controllers;
use App\Http\Requests\formValidation;
use Illuminate\Http\Request;
use App\User;
use Auth;

class RegistrationController extends Controller
{
	// show the user registration form
    public function showRegisterform(){
    	return view('frontend.registration');
    }

    //show loged in form
    public function showLogedform(){
    	return view('frontend.logedin');
    }

    // store registration data in DB //for validation input goes and msg return by app>>Request>>formValidation.php before store data
    public function storeRegistration(formValidation $request){
  		$request['password'] = bcrypt($request -> password); //dont use plaine text .harm for log in
    	$user = User::create($request -> all());// create a row of array in user table
    	auth()->login($user);  //with login feature redirect to below url 
    	return redirect('/');
    }

    //log in attemp or try to log in only with incripted password not plane text
    //log in attemp or try to log in only with incripted password not plane text
    public function checkLogedin(Request $request){
    	$this ->validate($request,[
    		'email' 	=> 'required|max:30',
    		'password'  => 'required'
    	]);
  		 $email = $request->input('email');
    	 $password = $request->input('password');
    	if (Auth::attempt(['email' => $email, 'password' => $password])){
    			return redirect('/');
   		}else {
   			// $attempt_email = Auth::attempt(['email' => $email]);
   			// $attempt_pass = Auth::attempt(['password' => $password]);

   			// if(!$attempt_email){
   			// 	dd('hello');
   			// }
   			// if(!$attempt_pass){
   			// 	dd('hello');
   			// }
   			return redirect('/logedin');
	};//if fail to log in
    
    }


}
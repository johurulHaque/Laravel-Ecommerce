<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use App\Models\District;
use App\Models\Division;

class UsersController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    //default is web guard for auth
    //$this->middleware('auth:web'); default ta use korla
    //related example admin pages controller 1st constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	$user =Auth::user();
    	return view('frontend.pages.users.dashboard',compact('user'));
    }
    public function profile(){
    	$user =Auth::user();
    	$divisions =Division::orderBy('priority','asc')->get();
        $districts =District::orderBy('name','asc')->get();
    	return view('frontend.pages.users.profile',compact('user','divisions','districts'));
    }
    //figure out => vs ->
     public function profileUpdate(Request $request){
    	$user =Auth::user();//stay 1st
    	//vvi what field change with  that id 
    	$this ->validate($request,[
    		'email' => 'required|unique:users,email,'.$user->id,
    		'username' => 'required|unique:users,username,'.$user->id,
    		'phone_no' => 'required|unique:users,phone_no,'.$user->id,
    	]);
    	

    		$user -> first_name = $request->first_name;
            $user -> last_name = $request->last_name;
            $user -> username = $request->username;
            $user -> gender = $request->gender;
            $user -> email = $request -> email;
            $user -> division_id = $request->division_id;
            $user -> division_id = $request->district_id;
            $user -> phone_no =  $request->phone_no;
            $user -> street_address = $request->street_address;
            $user -> shipping_address = $request->shipping_address;
            $user -> ip_adress = request()->ip();//vvi Function name must be a string//ip o update kora nebo jokhon profile update;korba //local a 1 ar live a real kaj korba

            // logic build up not use == coz hen use else remember
            if ($request ->password !=null || $request ->password !="") {
            $user -> password = Hash::make($request->password);
            }
            $user ->save();
            session()->flash('success','user profile has been update successfully');
    	return back();
    }
}

<?php

namespace App\Http\Controllers\Auth;
 
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\District;
use App\Models\Division;
use App\Notifications\VerifyRegistration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // redirected after register
    // redirected after register
    protected $redirectTo = '/';



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //when we are guest then only go to this register
    //when we are guest then only go to this register
    public function __construct()
    {
        $this->middleware('guest');
    }

    //this is overide to pass value from register controller
    //this is overide to pass value from register 15@30.3 see
     public function showRegistrationForm()
    {
        $divisions =Division::orderBy('priority','asc')->get();
        $districts =District::orderBy('name','asc')->get();
        return view('auth.register',compact('divisions','districts'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:20'],
            'last_name' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'boolean'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    // insert user data into DB table field
    // insert user data into DB table field
    // change crete to rigister ---this is build in methode jata post methode ar moto kaj orba
    //(array $data) change ..try with this later
    protected function register(Request $request)
    {
      $name = $request->first_name." ". $request->last_name;
      $username=str_slug($name);//make '-' sign between
        //then how return works for store DB
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'username' => $username,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'phone_no' => $request->phone_no,
            'street_address' => $request->street_address,
            'ip_adress' => request()->ip(),
            'email' => $request->email,
            'password' => Hash::make($request->password),//cant log with plain text by the frame work
            'remember_token' =>str_random(50),
            'status' => 0, //user not online

        ]);
        //user have the user ,he/she will be notify
        // 16@16.39 check it later
        // also try 16@5.14
        $user -> notify(new VerifyRegistration($user));
        session()->flash('success','A email has been sent.please confirm you eamil.');
        return back();//log in return see implements
    }
}

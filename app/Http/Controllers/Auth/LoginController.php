<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Notifications\VerifyRegistration;
use Illuminate\Http\Request;
use Auth;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // redirected after login
    // redirected after login
   //previous // protected $redirectTo = '/home';
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // added that is overide function
    // status 0 thakla jata register user login na korta para
    // buil in login a dawya nai ata
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        //find the user by this email
        //if status any make pblm then check 18@43.40
        $user = User::where('email','=',$request ->email)->first();
        //$user ->status ;non object property trying to use
        //=> ???
        if($user['status'] == 1){
        if(Auth::guard('web')->attempt(['email' => $request -> email , 'password' => $request -> password])){
            //log him now
            return redirect()->intended(route('index'));
    }else{
        session()->flash('sticky_error','Invalid login');
        return back();
    }
}else{
        //send him a token again
        if(!is_null($user)){
       //user have the user ,he/she will be notify
       $user -> notify(new VerifyRegistration($user));
       session()->flash('success','A new confirmation email has been sent.please confirm you eamil.');
        return redirect('/');

        }else {//if no user
        session()->flash('sticky_error','please register first');
        return redirect()->route('login');

        }
    }
}

}




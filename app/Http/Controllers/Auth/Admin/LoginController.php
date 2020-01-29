<?php

namespace App\Http\Controllers\Auth\Admin;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //ovveride
    //added after constructor
    public function showLoginForm()
    {
        return view('auth.admin.login');
    }
    // added that is overide function
    // status 0 thakla jata register user login na korta para
    // built in login a dawya nai ata
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        if(Auth::guard('admin')->attempt(['email' => $request -> email , 'password' => $request -> password])){
            //log him now
            return redirect()->intended(route('admin.index'));
    }else{
        session()->flash('sticky_error','Invalid login');
        return back();
    }

}
//override
public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route('admin.login');
    }

}




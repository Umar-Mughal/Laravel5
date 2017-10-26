<?php

namespace App\Http\Controllers\admin_area\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = 'admin_area/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

        //overriden function from AthenticateUsers class 
    public function showLoginForm()
    {
        return view('admin_area.login');
    }


    public function login(Request $request)
    {
      
          $this->validateLogin($request);


        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }


        return $this->sendFailedLoginResponse($request);
        print_r($request->all());

    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

     public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin_area/login');


    }
}

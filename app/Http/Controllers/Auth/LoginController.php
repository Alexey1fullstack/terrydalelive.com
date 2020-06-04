<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

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



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
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

    public function username() {
        return 'name';
    }

    public function loginUser(Request $request){

        $email	       = $request->email;
    	$password      = $request->password;
    	$rememberToken = $request->_token;

    	// now we use the Auth to Authenticate the users Credentials

		// Attempt Login for members
		if (Auth::guard()->attempt(['email' => $email, 'password' => $password], $rememberToken)) {
			$msg = array(
				'status'  => 'success',
				'message' => 'Login Successful'
			);
			return response()->json($msg);
		} else {
			$msg = array(
				'status'  => 'error',
				'message' => 'Login Fail !'
			);
			return response()->setStatusCode(201);
		}

    }



    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin');
    }
}

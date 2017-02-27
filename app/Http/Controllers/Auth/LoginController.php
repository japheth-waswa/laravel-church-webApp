<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;  //i added personally

        $this->middleware('guest', ['except' => 'logout']);
    }

     public function showLoginForm()
    {
        return view('auth.custom.login');
    }
    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password', 'blocked');

        $credentials['blocked'] = 0; 
        return $credentials;
    }
    
     public function redirectPath() {
         
        if ($this->request->user()->role == 1 || $this->request->user()->role == 2
                || $this->request->user()->role == 3  || $this->request->user()->role == 4) {
            return route('dashboard');
        }
        /**if neither admin or su  then log them out**/
        return route('logout');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\LoginUser;

use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


// use Illuminate\Foundation\Auth\AuthenticatesUsers;

// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */

//   
//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }
// }

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $loginUser;
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    
    public function __construct(LoginUser $loginUser)
    {
        $this->middleware('guest')->except('logout');
        $this->loginUser = $loginUser;
    }

    public function redirectToProvider($provider)
    {
        return $this->loginUser->authenticate($provider);
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $this->loginUser->login($provider);
        return redirect('/home');
    }

}
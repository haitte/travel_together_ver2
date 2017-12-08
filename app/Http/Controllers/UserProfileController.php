<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Plan;
use Auth;
class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_id = Auth::user()->id;

        $user =  User::find($users_id)->profile;
                    
        $plans = User::find($users_id)->plans;
                        
        return view('userProfile',['user' => $user,'plans' => $plans]);
    }
  
 
   
}

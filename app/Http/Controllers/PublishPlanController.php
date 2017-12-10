<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Plan;
use App\Comment;
use App\Reply;
use Auth;

class PublishPlanController extends Controller
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
    public function index($plan_id)
    {
        $users_id = Auth::user()->id;

        $user_profile = User::find($users_id)->profile;
                     
        $plan = Plan::find($plan_id);

        $comment = DB::table('users')
                    ->join('comments', 'users.id', '=', 'comments.users_id')
                    ->select('users.*','comments.*')
                    ->where(['comments.users_id'=>$users_id])
                    ->get(); 

        // $reply = DB::table('users')
        //             ->join('replys', 'users.id', '=', 'replys.users_id')
        //             ->select('users.*','replys.*')
        //             ->where(['replys.users_id'=>$users_id])
        //             ->get();
                          
        //$comment= Comment::paginate(10);     
                    
        //$plan= Plan::paginate(10);  
        
            
        return view('publishPlan',['user' => $user_profile,'plan' => $plan,'comment'=>null,'reply'=>null]);
    }

}

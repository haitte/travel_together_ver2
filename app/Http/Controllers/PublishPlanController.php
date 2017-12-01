<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Plan;
use App\Comment;
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
    public function index()
    {
        $users_id = Auth::user()->id;

        $profile = DB::table('users')
                    ->join('profiles','users_id', '=','profiles.users_id')
                    ->select('users.*','profiles.*')
                    ->where(['profiles.users_id'=>$users_id])
                    ->first();
                    
        $plan = DB::table('users')
                    ->join('plans','users_id', '=','plans.users_id')
                    ->select('users.*','plans.*')
                    ->where(['plans.users_id'=>$users_id])
                    ->first();  

        $comments = DB::table('users')
                    ->join('comments', 'users.id', '=', 'comments.users_id')
                    ->select('users.*','comments.*')
                    ->where(['comments.users_id'=>$users_id])
                    ->get(); 
                                
        $comment= Comment::paginate(10);     
                    
        $plan= Plan::paginate(10);     
            
        return view('publishPlan',['profile' => $profile,'plan' => $plan,'comment'=>$comment]);
    }

}

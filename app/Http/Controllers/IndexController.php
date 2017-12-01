<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostPlan;
use App\location;
use App\User;

use DB;
class IndexController extends Controller
{
    public function renderIndex(){

        // $users = DB::table('users')->join('posts','users.id','=','posts.user_id')->get();
        // dd($users);
        // $users = DB::table('users')->join('posts',function($join){
        // $join->on('users.id','=','posts.user_id')
        //  ->where('posts.id','>',1);
        // })->get();

        // $locations = DB::table('locations')->join('post_plans','locations.id','=','post_plans.id')->get();
        // return view('welcome')->with('posts',$posts);
        // dd($locations);
        // return $posts= PostPlan::all();

        //  $locations = DB::table('locations')->join('post_plans','locations.id','=','post_plans.id')->select('locations.location_name','post_plans.des')->get();

    //    $posts= PostPlan::with(['locations.location_name', 'des', 'users.name'])->get();

   $post_plans_with_locations_and_users=  DB::table('post_plans')
            ->join('users', 'users.id', '=', 'post_plans.user_id')
            ->join('locations', 'locations.id', '=', 'post_plans.location_id')
            ->select('post_plans.des', 'locations.location_name', 'locations.url', 'users.name')
            ->paginate(12);

    return view('index')->with('post_plan_info',$post_plans_with_locations_and_users);


}

// public function recomIndex(){
//         $recom_info = DB::table('locations')
//             ->select('location_name', 'locations.url', 'users.name')
//             ->paginate(12);

//         return view('index')->with('recom_info', $recom_info);
// }
    

}

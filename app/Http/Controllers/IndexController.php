<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostPlan;
use App\location;
use App\User;
use Input;
use DB;
class IndexController extends Controller
{

    public function renderIndex(){



   $post_plans_with_locations_and_users=  DB::table('post_plans')
            ->join('users', 'users.id', '=', 'post_plans.user_id')
            ->join('locations', 'locations.id', '=', 'post_plans.location_id')
            ->select('post_plans.des', 'locations.location_name', 'locations.url', 'users.name')
            ->paginate(12);

        $recom_info = DB::table('locations')
            ->select('location_name', 'url')
            ->paginate(3);

    return view('index')->with(array('post_plan_info'=>$post_plans_with_locations_and_users,'recom_info'=>$recom_info));


}

public function getLocationNames(Request $request){
        $term=$request->term;
        $locations = DB::table('locations')
            ->where('location_name','LIKE','%'.$term.'%')
            ->take(10)
            ->get();
        $location_names=array();
        foreach($locations as $key=>$location)
        {
            $location_names[]=['name'=>$location->location_name];
        }
        
        return array_flatten($location_names);
        // return response()->json($location_names);
}

    public function getLastPlans(Request $request)
    {
        $last_plans = DB::table('post_plans')
            ->join('users', 'users.id', '=', 'post_plans.user_id')
            ->join('locations', 'locations.id', '=', 'post_plans.location_id')
            ->select('post_plans.des', 'locations.location_name', 'locations.url', 'users.name', 'post_plans.updated_at')
            ->orderBy('post_plans.updated_at','DESC')
            ->paginate(12);

        $html = view('layouts.partials.plans')->with(array('post_plan_info' => $last_plans))->render();  
        return  response()->json(['success' => true, 'html' => $html]);
    }

    public function search(Request $request)
    {
        $last_plans = DB::table('post_plans')
            ->join('users', 'users.id', '=', 'post_plans.user_id')
            ->join('locations', 'locations.id', '=', 'post_plans.location_id')
            ->select('post_plans.des', 'locations.location_name', 'locations.url', 'users.name', 'post_plans.updated_at')
            ->orderBy('post_plans.updated_at', 'DESC')
            ->paginate(12);

        $html = view('layouts.partials.plans')->with(array('post_plan_info' => $last_plans))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\location;
use App\User;
use Input;
use DB;
class IndexController extends Controller
{

    public function renderIndex(){



   $post_plans_with_locations_and_users=  DB::table('plans')
            ->join('users', 'users.id', '=', 'plans.user_id')
            ->select('plans.id','plans.description', 'plans.destination_name', 'plans.plan_image', 'users.name')
            ->paginate(12);

        // $recom_info = DB::table('locations')
        //     ->select('location_name', 'url')
        //     ->paginate(3);
        $recom_info= location::orderByRaw('RAND()')
        ->select('location_name', 'url')
        ->take(6)
        ->get();

    return view('index')->with(array('post_plan_info'=>$post_plans_with_locations_and_users,'recom_info'=>$recom_info));


}

public function getLocationNames(Request $request){
        $term=$request->term;
        $locations = DB::table('plans')
            ->where('destination_name','LIKE','%'.$term.'%')
            ->take(10)
            ->get();
        $location_names=array();
        foreach($locations as $key=>$location)
        {
            $location_names[]=['name'=>$location->destination_name];
        }
        
        return array_flatten($location_names);
        // return response()->json($location_names);
}

    public function getLastPlans(Request $request)
    {
        $last_plans = DB::table('plans')
            ->join('users', 'users.id', '=', 'plans.user_id')
            ->select('plans.id', 'plans.description', 'plans.destination_name', 'plans.plan_image', 'users.name')
            ->orderBy('plans.updated_at','DESC')
            ->paginate(12);

        $html = view('layouts.partials.plans')->with(array('post_plan_info' => $last_plans))->render();  
        return  response()->json(['success' => true, 'html' => $html]);
    }

    public function search(Request $request)
    {
        $search_location=$request->s_location;
      //  $search_date=$request->s_date;
        $search = DB::table('plans')
            ->join('users', 'users.id', '=', 'plans.user_id')
            ->select('plans.id','plans.description', 'plans.destination_name', 'plans.plan_image', 'users.name')
            ->where('plans.destination_name', 'LIKE', $search_location )
            ->paginate(12);

        $html = view('layouts.partials.plans')->with(array('post_plan_info' => $search))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    // public function getDisplay($id)
    // {
    //     $getId = DB::table('post_plans')
    //         ->select('post_plans.id')
    //             find($id);

    //     return view('/plan~~~')->withProject($project);

    // }


}

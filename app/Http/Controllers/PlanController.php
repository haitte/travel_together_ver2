<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use App\Plan;
use Auth;
use App\Survey;
use Carbon;

class PlanController extends Controller
{
      
    public function plan()
    {
        return view('plan');
        
    }
    
    public function addPlan(Request $request)
    {
        session()->regenerate();
        
         $this->validate($request, [
            'plan_name' => 'required',
            'departure_time' => 'required',
            'arrive_time' => 'required',
            'departure_name' => 'required',
            'destination_name' => 'required',
            'description' => 'required',
            'group_num' => 'required',
            ]);
            
        $plans = new Plan;
        $plans->user_id=Auth::user()->id;
        $plans->plan_name = $request->input('plan_name');
        $plans->departure_time = $request->input('departure_time');
        $plans->arrive_time = $request->input('arrive_time');
        $plans->departure_name = $request->input('departure_name');
        $plans->destination_name = $request->input('destination_name');
        $plans->description = $request->input('description');
        $plans->group_num = $request->input('group_num');
        if(Input::hasFile('plan_image'))
        {
            $file = Input::file('plan_image');
            $file->move(public_path(). '/uploadsImage/', $file -> getClientOriginalName());
            $url = URL::to("/") . '/uploadsImage/'. $file -> getClientOriginalName();

        }
        $plans->plan_image = $url;
        $plans->save();
        
        session(['mytrip' => $plans->id]);

        return Redirect::to('/survey')->with('response','Plan Added Successfully!');
    }
}

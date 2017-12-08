<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\User;
use App\Trip;
use DB;

class SurveysController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surveys = Survey::all();
        
        $surveys= Survey::orderBy('survey_id','desc')->paginate(5);
        
        return view('surveys.index')->with('surveys',$surveys);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'trip_id'=>'required',
            'first_p'=> 'required',
            'second_p'=> 'required',
            'third_p'=> 'required'
            ]);
            
            //Create Survey
            $survey = new Survey;
            $survey->trip_id = $request->input('trip_id');
            $survey->first_p = $request->input('first_p');
            $survey->second_p = $request->input('second_p');
            $survey->third_p = $request->input('third_p');
            $survey->save();
            
            return redirect('/surveys')->with('success','Survey Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $survey_id
     * @return \Illuminate\Http\Response
     */
    public function show($survey_id)
    {
        //
        $survey = Survey::find($survey_id);
        return view('surveys.show')->with('survey',$survey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($survey_id)
    {
        //
        $survey = Survey::find($survey_id);
        return view('surveys.edit')->with('survey',$survey);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $survey_id)
    {
        //
         $this->validate($request,[
            'trip_id'=>'required',
            'first_p'=> 'required',
            'second_p'=> 'required',
            'third_p'=> 'required'
            ]);
            
            //Find Survey
            $survey = Survey::find($survey_id);
            $survey->trip_id = $request->input('trip_id');
            $survey->first_p = $request->input('first_p');
            $survey->second_p = $request->input('second_p');
            $survey->third_p = $request->input('third_p');
            $survey->save();
            
            return redirect('/mytrips')->with('success','Trip Preferences Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $survey_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($survey_id)
    {
        //
        $survey = Survey::find($survey_id);
        $survey->delete();
        
        return redirect('/surveys')->with('success','Post Removed');
    }
    
    public function sample(){
        $data= array(
            'title'=>'Let us get to know you',
            'destination'=>'DestinationName'
            );
        return view('surveys.create')-> with($data);
    }
    
    public function mytrips(){
        
        $user_id = auth()->user()->id;
        $trips= Trip::where('users_id', '=', $user_id)->get();
        
        return view('pages.mytrips')->with('trips',$trips);
    }
}

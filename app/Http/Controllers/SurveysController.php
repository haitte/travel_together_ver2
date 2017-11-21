<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class SurveysController extends Controller
{
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
    }
}

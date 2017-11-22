<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;


class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips= Trip::orderBy('trip_id','desc')->paginate(5);
        
        return view('trips.index')->with('trips',$trips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $trip_id
     * @return \Illuminate\Http\Response
     */
    public function show($trip_id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $trip_id
     * @return \Illuminate\Http\Response
     */
    public function edit($trip_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $trip_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trip_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $trip_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trip_id)
    {
        $trip = Trip::find($trip_id);
        $trip->delete();
        
        return redirect('/trips')->with('success','Trip deleted.');
    }
}

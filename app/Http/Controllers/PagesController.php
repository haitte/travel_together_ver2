<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        
    }
    
    public function survey(){
        $data= array(
            'title'=>'Let us get to know you',
            'destination'=>'DestinationName'
            );
        return view('pages.matchmaking')-> with($data);
    }
}

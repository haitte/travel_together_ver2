<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Survey;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }
    
    
    public function index(){
        $data= array(
            'title'=>'Welcome to TravelTogether!',
            );
        return view('fake_auth.index')-> with($data);
    }
    
    public function survey(){
        $data= array(
            'title'=>'Let us get to know you',
            'destination'=>'DestinationName'
            );
        return view('surveys.create')-> with($data);
    }
    
    public function similarity(){
        return view('pages.similarity');
    }
    
    public function myhome(){
        return view('pages.myhome');
    }
    
}

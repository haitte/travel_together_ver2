<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Plan;
use App\SignUp;
use Auth;

class SignUpController extends Controller
{
    public function signup()
    {
        return view('homePlan');    
    }

    public function addSignUp(Request $request)
    {
         $this->validate($request, [
            'contact_num' => 'required',
            'date_of_birth' => 'required',
            'male_num' => 'required',
            'female_num' => 'required',
            ]);
            
        $signups = new SignUp;
        $signups->users_id=Auth::user()->id;
        $signups->username = $request->input('username');
        $signups->contact_num = $request->input('contact_num');
        $signups->date_of_birth = $request->input('date_of_birth');
        $signups->male_num = $request->input('male_num');
        $signups->female_num = $request->input('female_num');
 
        $signups->save();

        return redirect('/homePlan');

        
    }

}





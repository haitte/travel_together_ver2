<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
      
    public function profile()
    {
        return view('profile');
    }
    
    public function addProfile(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'country' => 'required',
            ]);
            
        $profiles = new Profile;
        $profiles->users_id=Auth::user()->id;
        $profiles->name = $request->input('name');
        $profiles->age = $request->input('age');
        $profiles->gender = $request->input('gender');
        $profiles->country = $request->input('country');
        if(Input::hasFile('profile_pic'))
        {
            $file = Input::file('profile_pic');
            $file->move(public_path(). '/uploadsImage/', $file -> getClientOriginalName());
            $url = URL::to("/") . '/uploadsImage/'. $file -> getClientOriginalName();

        }
        $profiles->profile_pic = $url;
        $profiles->save();
        return redirect('/profile')->with('response','Profile Added Successfully');
    }
}

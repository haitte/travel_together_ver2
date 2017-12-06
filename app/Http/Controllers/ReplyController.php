<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reply;
use App\Plan;
use Auth;

class ReplyController extends Controller
{
    public function reply()
    {
        return view('publishPlan');    
    }

    public function addReply(Request $request)
    {
         $this->validate($request, [
            'reply' => 'required',
            ]);
            
        $replys = new Reply;
        $replys->users_id=Auth::user()->id;
        $replys->reply = $request->input('reply');
 
        $replys->save();

        
        return redirect('/publishPlan');

        
    }

}





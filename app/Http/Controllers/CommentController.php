<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Plan;
use Auth;

class CommentController extends Controller
{
    public function comment()
    {
        return view('publishPlan');    
    }

    public function addComment(Request $request)
    {
         $this->validate($request, [
            'comment' => 'required',
            ]);
            
        $comments = new Comment;
        $comments->user_id=Auth::user()->id;
        $comments->comment = $request->input('comment');
 
        $comments->save();

        
        return redirect('/publishPlan');

        
    }

}





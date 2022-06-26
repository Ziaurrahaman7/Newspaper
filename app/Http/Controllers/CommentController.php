<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Request $request){
       $request->validate([
            'comment'=>'required',
        ]);
        $request['user_id']= Auth::id();
        $request['approved']= 0;
        // dd($data);
        // dd($request->all());
        Comment::create($request->all());
        return back();
    }

    // ===============admin part============
    public function allcomment(){
       $comments = Comment::with('user','post','category')->get();
       return view('admin.comment.index', compact('comments'));
    }

    public function approved(Request $request, Comment $comment){
      $data =  $request->validate([
        'approved'=>'required'    
        ]);
        // dd($data);
        $comment->update($data);
        return redirect('admin/comment');
    }
}

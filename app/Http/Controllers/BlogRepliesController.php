<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog_replies;
class BlogRepliesController extends Controller
{
    
   
    public function store(Request $request)
    {
        if (Auth::check()) {
           $reply= new Blog_replies();
           $reply->comment_id= $request->input('comment_id');
           $reply->name =Auth::user()->name;
           $reply->reply = $request->input('reply');
           $reply->user_id = Auth::user()->id;
           $reply->save();
        
           return redirect()->route('Blog')->with('success','Comment Added successfully..!');
        }
        else
        return back()->withInput()->with('error','Something wrong');
    }

}
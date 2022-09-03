<?php
namespace App\Http\Controllers;
use App\Models\Blog_comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BlogCommentsController extends Controller
{
    
    public function store(Request $request)
    {
        if (Auth::check()) {
                $add=new Blog_comments();
                $add->user_id = Auth::user()->id;
                $add->name = Auth::user()->name;
                $add->comment= $request->input('comment');
                $add->save();
                
            return redirect()->route('Blog')->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }


        
    }}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog_comments;
use App\Models\Blog_replies;

class BlogController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Blog_comments::where('is_deleted',0)->latest('created_at')->get();
        $replies = Blog_replies::where('is_deleted',0)->latest('created_at')->get();
        return view('layout.Blog', ['comments' => $comments, 'replies'=>$replies]);
    

    /* */
    }
}
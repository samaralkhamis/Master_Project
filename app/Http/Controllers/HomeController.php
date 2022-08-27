<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Welcome');
    }

    public function profile()
    {
        return view('home');
    }

    public function ViewProfileData()
    {              
        $profile = Order::where('Email', Auth::user()->email)->get(); // To Show All Data From Order to specific user
        return view('home', compact('profile')) ;
    }

}

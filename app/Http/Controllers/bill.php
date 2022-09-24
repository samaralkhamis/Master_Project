<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bill extends Controller
{
    public function ViewBill()
    {  
    
        return view('layout.bill');
    }


    public function InsertOrder(Request $request){
        $cart = Order::where('isDeleted',0)->latest('created_at')->get();
        return view('cart', compact('cart'));
     }

}

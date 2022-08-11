<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaborCartController extends Controller
{
    public function viewLCart()
    {
        return view('layout.CreateLCart');
    }

    public function AddToLaborCart(Request $request)
    {									
        $add=new labor_cart();
        $add->Labor_id= $request->input('Labor_id');
        $add->Order_id= $request->input('Order_id');
        $add->LaborFName= $request->input('LaborFName');
        $add->LaborLName= $request->input('LaborLName'); 
        $add->Price= $request->input('Price');
        $add->save();
        return redirect('/Shop')->with('message','The data has been add Product successfully');
    }

}

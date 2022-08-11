<?php

namespace App\Http\Controllers;
use App\Models\truck_cart;
use Illuminate\Http\Request;

class TruckCartController extends Controller
{
    
    public function viewTCart()
    {
        return view('layout.CreateTCart');
    }

    public function AddToTruckCart(Request $request){									
        $add=new truck_cart();
        $add->Truck_id= $request->input('Truck_id');
        $add->Order_id= $request->input('Order_id');
        $add->Quantity= $request->input('Quantity');
        $add->TruckImg= $request->input('TruckImg');
        $add->Price= $request->input('Price');
        $add->save();
        return redirect('/Shop')->with('message','The data has been add Product successfully');

        }
}
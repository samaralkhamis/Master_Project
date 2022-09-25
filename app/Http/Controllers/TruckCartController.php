<?php

namespace App\Http\Controllers;
use App\Models\truck_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruckCartController extends Controller
{
    
    public function viewTCart()
    {
        return view('layout.CreateTCart');
    }

    public function AddToTruckCart(Request $request)
    {									
        $add=new truck_cart();
        $add->Truck_id= $request->input('Truck_id');
        $add->Order_id= $request->input('Order_id');
        $add->Quantity= $request->input('Quantity');
        $add->TruckImg= $request->input('TruckImg');
        $add->Price= $request->input('Price');
        $add->save();
        return redirect('/ShopTruck')->with('Truckmessage','The Truck has been added successfully');

    }

    public function DeleteTruck($id)
    {
        $Delete = DB::update('update truck_carts set isDeleted = ? where Truck_id = ?',[1,$id]);         
        return redirect('/Cart')->with('Deletemessage','The truck has been Deleted successfully');
    }

    public function updateCart(Request $request, $id)
    {
        $truckQuantity = $request->input('Quantity');
        DB::update('update truck_carts set Quantity = ? where TCart_id = ?', [ $truckQuantity, $id]);
        return redirect('/Cart')->with('updatemessage', 'The Quantity of truck has been updated successfully');

    }
}

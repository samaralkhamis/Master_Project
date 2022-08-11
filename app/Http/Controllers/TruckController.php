<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function singleTruck($id){
        $SingleTruck = DB::select('select * from trucks where Truck_id= :id', ['id' => $id]); //To Show Single Truck
        return view('Layout.SingleTruck', compact('SingleTruck')) ;
    }


    // public function AddTruckToCart($id){
    //     $SingleTruck = DB::select('select * from trucks where Truck_id = :id', ['id' => $id]);
    //     return view('layout.SingleTruck', compact('SingleTruck'));
    //  }
           
    //  public function updateCart(Request $request, $id)
    //  {  
    //     $add->Truck_id= $request->input('Truck_id');
    //     $add->TruckImg= $request->input('TruckImg');
    //     $add->Price= $request->input('Price');

    //     DB::update('update carts set Truck_id = ? , TruckImg=?, Price = ? , where Cart_id = ', [$Truck_id,$TruckImg,$Price,$id]);
    //     return redirect('/Shop')->with('message','The data has been updated successfully');
  
    //  }
}

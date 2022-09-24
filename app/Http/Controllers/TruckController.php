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

    public function Truck(){
        $trucks = DB::select('select * from trucks'); // To Show All truks
        return view('layout.ShopT', compact('trucks'));
    }



}

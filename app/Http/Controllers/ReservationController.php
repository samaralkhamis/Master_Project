<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{

   public function Reservation(Request $request){
    $create=new Reservation();
    $create->PickupLocation=$request->input('PickupLocation');
    $create->DropOffLocation=$request->input('DropOffLocation');
    $create->StartTime=$request->input('StartTime');
    $create->save();
    return redirect('/Shop')->with('messageRej','Resrvation a date have been added successfully. Now you can start Moving with product');
    }

}

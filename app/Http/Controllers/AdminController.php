<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function displaydash(){
        return view('layouts.dashbord');
     }

     public function viewBoxes()
    {
        $product = DB::select('select * from products where isDeleted = 0');         
        return view('layouts.Boxes', compact('product'));
    }

     public function viewTrucks()
    {
        $Truck = DB::select('select * from Trucks where isDeleted = 0');         
        return view('layouts.Trucks', compact('Truck'));
    }

     public function viewLabors()
    {
        $Labor = DB::select('select * from Labors where isDeleted = 0');         
        return view('layouts.Labors', compact('Labor'));
    }

     public function viewOrders()
    {
        $Order = DB::select('select * from orders');         
        return view('layouts.Orders', compact('Order'));
    }
}

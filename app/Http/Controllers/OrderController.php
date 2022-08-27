<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product_Cart;
use App\Models\labor_cart;
use App\Models\truck_cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function viewCheckout()
    {
        return view('layout.Checkout');
    }

    public function ViewCheckoutProduct()
        {  
            $ProductCart = product_cart::where('isDeleted', '0')->get();// To Show All Products 
            $laborCart = labor_cart::where('isDeleted', '0')->get();//To Show All Labors
            $trucksCart = truck_cart::where('isDeleted', '0')->get();//To Show Alltruks
           return view('layout.Checkout', compact('ProductCart', 'laborCart' , 'trucksCart'));
        }


        public function InsertOrder(Request $request){
         $create=new Order();
         $create->Name=$request->input('Name');
         $create->Phone=$request->input('Phone');
         $create->Email=$request->input('Email');
         $create->Address=$request->input('Address');
         $create->ProductName=$request->input('ProductName');
         $create->ProductPrice=$request->input('ProductPrice');
         $create->LaborFName=$request->input('LaborFName');
         $create->LaborPrice=$request->input('LaborPrice');
         $create->Truck=$request->input('Truck');
         $create->TruckPrice=$request->input('TruckPrice');
         $create->Total=$request->input('Total');
         $create->save();
         return redirect('/')->with('messageplaceorder','Thank You , Your Order Has Been Sent');
         }

}

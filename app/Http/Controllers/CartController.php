<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
   
    public function viewCart(){									
    $add=new Cart();
    $add->user_id = Auth::user()->id;
    // $add->first_name = Auth::user()->first_name;
    // $add->last_name= Auth::user()->last_name;
    $add->Product_id= $request->input('Product_id');
    $add->Truck_id= $request->input('Truck_id');
    $add->Labor_id= $request->input('Labor_id');
    $add->Order_id= $request->input('Order_id');
    $add->Quantity= $request->input('Quantity');
    $add->productName= $request->input('productName');
    $add->productPrice= $request->input('productPrice');
    $add->productImg= $request->input('productImg');
    $add->TruckImg= $request->input('TruckImg');
    $add->Price= $request->input('Price');
    $add->LaborFName= $request->input('LaborFName');
    $add->LaborLName= $request->input('LaborLName');
    $add->is_done= $request->input('is_done');
    $add->save();
    return view('layout.Shop');
    }

    // public function AddToCart(){
    //     $cart= DB::insert('insert into Cart (id,Img , name , Quantity ) values (?, ?)', [1, 'Dayle']); 
    // }
}

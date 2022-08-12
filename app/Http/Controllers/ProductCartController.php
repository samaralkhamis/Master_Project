<?php

namespace App\Http\Controllers;
use App\Models\Product_Cart;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{// $add->first_name = Auth::user()->first_name;
 // $add->last_name= Auth::user()->last_name;

    public function viewCart()
    {
        return view('layout.CreateCart');
    }

    public function AddToCart(Request $request){									
        $add=new Product_Cart();
        $add->product_id= $request->input('product_id');
        $add->Order_id= $request->input('Order_id');
        $add->Quantity= $request->input('Quantity');
        $add->productName= $request->input('productName');
        $add->productPrice= $request->input('productPrice');
        $add->productImg= $request->input('productImg');
        $add->save();
        return redirect('/Shop')->with('message','The data has been add Product successfully');

        }
}

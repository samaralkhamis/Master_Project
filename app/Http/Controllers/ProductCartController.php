<?php

namespace App\Http\Controllers;

use App\Models\labor_cart;
use App\Models\Product_Cart;
use App\Models\truck_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCartController extends Controller
{ // $add->first_name = Auth::user()->first_name;
    // $add->last_name= Auth::user()->last_name;

    public function viewCart()
    {
        return view('layout.CreateCart');
    }

    public function AddToCart(Request $request)
    {
        $add = new Product_Cart();
        $add->product_id = $request->input('product_id');
        $add->Order_id = $request->input('Order_id');
        $add->Quantity = $request->input('Quantity');
        $add->productName = $request->input('productName');
        $add->productPrice = $request->input('productPrice');
        $add->productImg = $request->input('productImg');
        $add->save();
        return redirect('/Shop')->with('productmessage', 'The Product has been added successfully to the cart');

    }

    public function ViewProduct()
    {
        $ProductCart = product_cart::where('isDeleted', '0')->get(); // To Show All Products
        $laborCart = labor_cart::where('isDeleted', '0')->get(); //To Show All Labors
        $trucksCart = truck_cart::where('isDeleted', '0')->get(); //To Show Alltruks
        return view('layout.Cart', compact('ProductCart', 'laborCart', 'trucksCart'));
    }

    public function DeletePro($id)
    {
        $Delete = DB::update('update product_carts set isDeleted = ? where Product_id = ?', [1, $id]);
        return redirect('/Cart')->with('Deletemessage', 'The product has been Deleted successfully');
    }

    public function updateCart(Request $request, $id)
    {
        $productQuantity = $request->input('Quantity');
        DB::update('update product_carts set Quantity = ? where PCart_id  = ?', [$productQuantity, $id]);
        return redirect('/Cart')->with('updatemessage', 'The Quantity of product has been updated successfully');

    }

}

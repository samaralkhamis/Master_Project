<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product_Cart;
use App\Models\labor_cart;
use App\Models\truck_cart;
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

        public function ViewProduct()
        {  
            $ProductCart = product_cart::where('isDeleted', '0')->get();// To Show All Products 
            $laborCart = labor_cart::where('isDeleted', '0')->get();//To Show All Labors
            $trucksCart = truck_cart::where('isDeleted', '0')->get();//To Show Alltruks
           return view('layout.Cart', compact('ProductCart', 'laborCart' , 'trucksCart'));
        }



        public function DeletePro($id){
            $Delete = DB::update('update product_carts set isDeleted = ? where Product_id = ?',[1,$id]);         
            return redirect('/Cart')->with('Deletemessage','The data has been Deleted successfully');
         }

    

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function ViewProduct()
    {  
        $product = DB::select('select * from products'); // To Show All Product
       return view('layout.Shop', compact('product'));
    }

    public function singleProduct($id){
        $SingleProduct = DB::select('select * from products where product_id = :id', ['id' => $id]); //To Show Single Product
        return view('Layout.SingleProduct', compact('SingleProduct')) ;
    }


}

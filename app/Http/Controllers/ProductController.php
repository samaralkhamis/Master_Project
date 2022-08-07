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
        $labor = DB::select('select * from labors'); // To Show All Labors
        $trucks = DB::select('select * from trucks'); // To Show All truks
       return view('layout.Shop', compact('product' , 'labor' , 'trucks'));
    }

    public function singleProduct($id){
        $SingleProduct = DB::select('select * from single_pros where product_id = :id', ['id' => $id]); //To Show Single Product
        return view('Layout.SingleProduct', compact('SingleProduct')) ;
    }
   




}

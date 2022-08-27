<?php

namespace App\Http\Controllers;
use App\Models\labor_Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaborController extends Controller
{
    public function SingleLabor($id){
        $SingleLabor = DB::select('select * from labors where Labor_id = :id', ['id' => $id]); //To Show Single Labor
        return view('Layout.SingleLabor', compact('SingleLabor')) ;
    }

    public function viewLCart()
    {
        return view('layout.CreateLCart');
    }

    public function AddToLaborCart(Request $request)
    {									
        $add=new labor_cart();
        $add->Labor_id= $request->input('Labor_id');
        $add->LaborFName= $request->input('LaborFName');
        $add->Status= $request->input('Status');
        // $add->Price= $request->input('Price');
        $add->save();
        return redirect('/Shop')->with('message','The data has been add Product successfully');
    }

    public function DeleteLabor($id){
        $Delete = DB::update('update labor_carts set isDeleted = ? where Labor_id = ?',[1,$id]);         
        return redirect('/Cart')->with('Delemessage','The data has been Deleted successfully');
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function displaydash()
    {
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

    #################################### Boxes CRUD #######################################
    public function addBox()
    {
        return view('layouts.creatBox');
    }

    public function insertBox(Request $request)
    {
        $productName = $request->input('productName');
        $productImg = $request->input('productImg');
        $productCategory = $request->input('productCategory');
        $productPrice = $request->input('productPrice');
        $productDescription = $request->input('productDescription');
        $insert = DB::insert('insert into products (productName, productImg ,productCategory , productPrice , productDescription ) values (?, ? ,? , ? ,?)', [$productName, $productImg, $productCategory, $productPrice, $productDescription]);
        return redirect('/Product')->with('messageRej', 'The data has been added successfully');
    }

    public function deleteProduct($id)
    {
        $usersInfo = DB::update('update products set isDeleted = ? where product_id = ?', [1, $id]);
        return redirect('/Product')->with('message', 'The product has been Deleted successfully');
    }

    public function editBox($id)
    {

        $update = DB::select('select * from products where product_id = :id', ['id' => $id]);
        return view('layouts.updateBox', compact('update'));
    }

    public function updateBox(Request $request, $id)
    {
        $productName = $request->input('productName');
        $productCategory = $request->input('productCategory');
        $productPrice = $request->input('productPrice');
        $productDescription = $request->input('productDescription');
        DB::update('update products set productName = ?, productCategory = ?, productPrice = ? ,productDescription = ? where product_id = ?', [$productName, $productCategory, $productPrice, $productDescription, $id]);
        return redirect('/Product')->with('message', 'The data has been updated successfully');

    }

    #################################### Trucks CRUD #######################################

    public function addTruck()
    {
        return view('layouts.createTruck');
    }

    public function insertTruck(Request $request)
    {
        $TruckImg = $request->input('TruckImg');
        $Dimention_L_W_H = $request->input('Dimention_L_W_H');
        $Deck_height = $request->input('Deck_height');
        $Door_Opening = $request->input('Door_Opening');
        $Price = $request->input('Price');
        $TruckDes = $request->input('TruckDes');
        $insert = DB::insert('insert into trucks (TruckImg, Dimention_L_W_H ,Deck_height,Door_Opening,Price,TruckDes ) values (?, ? ,? , ? ,? , ?)', [$TruckImg, $Dimention_L_W_H, $Deck_height, $Door_Opening, $Price, $TruckDes]);
        return redirect('/Trucks')->with('message', 'The data has been add user successfully');
    }

    public function deleteTruck($id)
    {
        $usersInfo = DB::update('update trucks set isDeleted = ? where Truck_id = ?', [1, $id]);
        return redirect('/Trucks')->with('message', 'The data has been Deleted successfully');
    }

    public function editTruck($id)
    {
        $update = DB::select('select * from trucks where Truck_id = :id', ['id' => $id]);
        return view('layouts.updatTruck', compact('update'));
    }

    public function updateTruck(Request $request, $id)
    {
        $Dimention_L_W_H = $request->input('Dimention_L_W_H');
        $Deck_height = $request->input('Deck_height');
        $Door_Opening = $request->input('Door_Opening');
        $Price = $request->input('Price');
        $TruckDes = $request->input('TruckDes');
        DB::update('update trucks set Dimention_L_W_H = ?, Deck_height = ?, Door_Opening = ? ,Price = ? ,TruckDes = ? where Truck_id = ?', [$Dimention_L_W_H, $Deck_height, $Door_Opening, $Price, $TruckDes, $id]);
        return redirect('/Trucks')->with('message', 'The data has been updated successfully');
    }

    #################################### Labor CRUD #######################################

    public function addLabor()
    {
        return view('layouts.createLabor');
    }

    public function insertLabor(Request $request)
    {
        $LaborFName = $request->input('LaborFName');
        $LaborLName = $request->input('LaborLName');
        $Price = $request->input('Price');
        $insert = DB::insert('insert into labors (LaborFName, LaborLName ,Price ) values (?, ? ,? )', [$LaborFName, $LaborLName, $Price]);

        return redirect('/Labors')->with('message', 'The Team has been added successfully');
    }

    public function deleteLabor($id)
    {
        $usersInfo = DB::update('update labors set isDeleted = ? where Labor_id = ?', [1, $id]);
        return redirect('/Labors')->with('message', 'The Team has been Deleted successfully');
    }

    #################################### showd ynamic data  #######################################

    public function showdynamicdata()
    {
        $orders = DB::table('orders')->get();
        $orders_count = $orders->count();

        $users = DB::table('users')->get();
        $users_count = $users->count();

        $feedback = DB::table('Blog')->get();
        $feedback_count = $feedback->count();

        DB::update('update table_numbers set orders = ? , users = ? , feedback = ?  where id = 1 ', [$orders_count, $users_count, $feedback_count]);

        $numbers = DB::table('table_numbers')->where('id', 1)->get();
        return view('layouts.dashbord', compact('numbers'));
    }
}

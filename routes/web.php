<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaborController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\TruckCartController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Layout.welcome');
});

Route::get('/Contact', function () {
    return view('layout.Contact');
});

Route::get('/About', function () {
    return view('layout.About');
});

Route::get('/Cart', function () {
    return view('layout.Cart');
});


Route::get('/Shop', function () {
    return view('layout.Shop');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::get('/Shop', [ProductController::Class,'ViewProduct']); 
Route::get('/Checkout', [OrderController::Class,'ViewCheckout'])->middleware('auth'); 

Route::get('/Reservation', [ReservationController::Class,'viewReservation']);
Route::post('/Reservation', [ReservationController::class, 'Reservation']);

Route::get('/SingleProduct/id/{id}', [ProductController::Class,'singleProduct']); 
Route::get('/SingleTruck/id/{id}', [TruckController::Class,'singleTruck']); 
Route::get('/SingleLabor/id/{id}', [LaborController::Class,'SingleLabor']); 

Route::get('/CreateCart', [ProductCartController::Class,'viewCart']);
Route::post('/CreateCart', [ProductCartController::class, 'AddToCart']);

Route::get('/CreateTCart', [TruckCartController::Class,'viewTCart']);
Route::post('/CreateTCart', [TruckCartController::class, 'AddToTruckCart']);

Route::get('/CreateLCart', [LaborController::Class,'viewLCart']);
Route::post('/CreateLCart', [LaborController::class, 'AddToLaborCart']);

Route::get('/Cart', [ProductCartController::Class,'ViewProduct']); 
Route::get('/Checkout', [OrderController::Class,'ViewCheckoutProduct']); 
Route::post('/Checkout', [OrderController::Class,'InsertOrder']); 

Route::get('/DeletePro/id/{id}', [ProductCartController::class, 'DeletePro']);
Route::get('/DeleteTruck/id/{id}', [TruckCartController::class, 'DeleteTruck']);
Route::get('/DeleteLabor/id/{id}', [LaborController::class, 'DeleteLabor']);

Route::get('/home', [HomeController::Class,'ViewProfileData']); 



################################# ADMIN DASBOARD ##################################

Route::get('Dashbord', [AdminController::class, 'displaydash']);

Route::get('Product', [AdminController::class, 'viewBoxes']);
Route::get('Trucks', [AdminController::class, 'viewTrucks']);
Route::get('Labors', [AdminController::class, 'viewLabors']);
Route::get('Orders', [AdminController::class, 'viewOrders']);




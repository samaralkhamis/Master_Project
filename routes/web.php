<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaborController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\TruckCartController;
use App\Http\Controllers\TruckController;


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

Route::get('/Checkout', function () {
    return view('layout.Checkout');
});

Route::get('/Shop', function () {
    return view('layout.Shop');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::get('/Shop', [ProductController::Class,'ViewProduct']); 

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


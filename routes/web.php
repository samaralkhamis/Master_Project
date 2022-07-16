<?php

use Illuminate\Support\Facades\Route;

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
    return view('Layout.Master');
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

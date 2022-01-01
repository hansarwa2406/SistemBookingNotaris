<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\NotarisControllers;

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
    return view('index');
});

// --CRUD Klien
Route::resource('/dashboard/klien', KlienController::class);
// --CRUD Notaris
Route::resource('/dashboard/nota', NotarisControllers::class);
// --CRUD Booking
Route::resource('/dashboard/booking', BookingController::class);



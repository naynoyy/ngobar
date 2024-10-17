<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//ini adalah controller ngobar
use App\Http\Controllers\NgobarController;

Route::get('/', function () {
    return view('welcome');
});

//contoh route memakai method get
//Route::get('', function () {
//    return view('ngobars.index')
//});

Route::resource('ngobars', NgobarController::class);

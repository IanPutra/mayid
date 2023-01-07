<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ian;
use App\Http\Controllers\Yosef;
use App\Http\Controllers\Fikri;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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


Route::prefix('dashboard')->group(function () {
    Route::resource('/admin', AdminController::class);
    Route::resource('/customer', CustomerController::class);
    Route::resource('/product', ProductController::class);
});

Route::prefix('ian')->group(function () {
    Route::resource('/', Ian::class);
});

Route::prefix('yosef')->group(function () {
    Route::resource('/', Yosef::class);
});

Route::prefix('fikri')->group(function () {
    Route::resource('/', Fikri::class);
});

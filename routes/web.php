<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ian;
use App\Http\Controllers\Yosef;
use App\Http\Controllers\Fikri;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldController;
use App\Http\Controllers\CustomerView;
use App\Http\Controllers\PaymentController;

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

//Customer View
Route::get('/', [CustomerView::class, 'index']);
Route::get('/product', [CustomerView::class, 'product']);
Route::get('/product-buy/{id}', [CustomerView::class, 'productbuy']);
Route::get('/about', [CustomerView::class, 'about']);
Route::get('/services', [CustomerView::class, 'services']);
Route::get('/contact-us', [CustomerView::class, 'contactUs']);


Route::prefix('dashboard')->group(function () {
    Route::resource('/admin', AdminController::class);
    Route::resource('/customer', CustomerController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/sold', SoldController::class);
    Route::resource('/payment', PaymentController::class);
    Route::get('service/{id}/progress', [ServiceController::class, 'editprogress']);
    Route::get('service/{id}/detail-progress', [ServiceController::class, 'detailprogress']);
    Route::post('service/update-progress', [ServiceController::class, 'updateprogress']);
    Route::post('service/pickup', [ServiceController::class, 'pickup']);
    Route::post('sold/deliver', [SoldController::class, 'deliver']);
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

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SoldItemController;

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
    return view('home');
});

Route::get('/products',[ProductController::class,'productList']);

//PRODUCTS ADD EDIT UPDATE DELETE

Route::get('/show',[ProductController::class,'showProduct']);

Route::get('/create',[ProductController::class,'addProduct']);

Route::post('/store', [ProductController::class, 'storeProduct']);

Route::get('/edit/{id}',[ProductController::class,'editProduct']);

Route::post('/update/{id}', [ProductController::class, 'updateProduct']);

Route::get('/delete/{id}', [ProductController::class, 'deleteProduct']);

//ORDER

Route::get('/orderview',[ProductController::class, 'order']);
Route::post('/placeorder',[InvoiceController::class, 'placeOrder']);



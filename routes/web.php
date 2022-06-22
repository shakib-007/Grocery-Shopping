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

Route::get('/products',[ProductController::class,'productList'])->name('products');

//PRODUCTS ADD EDIT UPDATE DELETE

Route::get('/show',[ProductController::class,'showProduct'])->name('show');

Route::get('/create',[ProductController::class,'addProduct'])->name('create');

Route::post('/store', [ProductController::class, 'storeProduct'])->name('store');

Route::get('/edit/{id}',[ProductController::class,'editProduct'])->name('edit');

Route::post('/update/{id}', [ProductController::class, 'updateProduct'])->name('update');

Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete');

//ORDER

Route::get('/orderview',[ProductController::class, 'order'])->name('orderview');

Route::post('/placeorder',[InvoiceController::class, 'placeOrder'])->name('placeorder');

//INVOICE

Route::get('/invoicelist',[InvoiceController::class, 'invoiceList'])->name('invoicelist');

Route::get('/view/{id}',[InvoiceController::class, 'viewInvoice'])->name('view');

Route::get('/deleteinvoice/{id}',[InvoiceController::class, 'deleteInvoice'])->name('deleteinvoice');

//DOWNLOAD INVOICE

Route::get('/downloadInvoice/{id}',[InvoiceController::class, 'downloadInvoice'])->name('downloadInvoice');






<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'products');
Route::resource('products', \App\Http\Controllers\ProductController::class)->only('index');
Route::resource('product', \App\Http\Controllers\ProductController::class)->only('show');
Route::view('cart', 'cart');
Route::view('about', 'about');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', function () { return 'Minister'; })->name('home');
    Route::resource('products', \App\Http\Controllers\ProductController::class)->only('index');
    Route::resource('product', \App\Http\Controllers\ProductController::class)->except('index', 'show');
});

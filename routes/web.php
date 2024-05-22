<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', \App\Http\Controllers\ProductController::class)->only('index');
Route::resource('product', \App\Http\Controllers\ProductController::class)->only('show');
Route::view('cart', 'cart');
Route::view('about', 'about');

Route::prefix('admin')->group(function () {
    Route::resource('products', \App\Http\Controllers\ProductController::class)->only('index');
    Route::resource('product', \App\Http\Controllers\ProductController::class)->except('index', 'show');
});

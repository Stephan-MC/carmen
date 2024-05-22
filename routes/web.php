<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resources(
    [
        'products' => \App\Http\Controllers\ProductController::class,
        'product' => \App\Http\Controllers\ProductController::class
    ],
    [
        'products' => ['only' => 'index'],
        'product' => ['except' => 'index']
    ]
);
Route::get('cart', fn () => view('cart'));

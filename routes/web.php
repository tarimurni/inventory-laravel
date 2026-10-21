<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

// Resource Route untuk Category dan Product
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
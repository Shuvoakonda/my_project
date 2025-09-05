<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $products = Product::latest()->take(8)->get();
    return view('welcome', compact('products'));
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Product listing and details
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

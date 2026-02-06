<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'home'])->name('home');

// Exercice 1
Route::get('/hello', function () {
    return 'Hello Laravel!';
    });
    
// Exercice 2
Route::get('/about', [PageController::class, 'about'])->name('about');

// Exercice 3
// Route::get('/product/{productId}', [ProductController::class, 'show'])->name('product.show');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::resource('/products', ProductController::class);


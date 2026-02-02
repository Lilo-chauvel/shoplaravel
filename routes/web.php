<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ 
    return 'Page acceuil';
});

// Exercice 1
Route::get('/hello', function () {
    return 'Hello Laravel!';
    });
    
// Exercice 2
Route::get('/home', [PageController::class,'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Exercice 3
Route::get('/products/{productNumber}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
Route::get('/about', [PageController::class, 'about'])->name('  about');

// Exercice 3
Route::get('/produits/{productNumber}', [ProductController::class, 'show'])->name('product.show');
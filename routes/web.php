<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use Database\Seeders\Order_itemsSeeder;
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
Route::resource('/categories', CategoryController::class);

Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class,'add'])->name('cart.add');
Route::patch('/cart/update/{product}', [CartController::class,'update'])->name('cart.update');
Route::delete('/cart/remove/{product}', [CartController::class,'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class,'clear'])->name('cart.clear');
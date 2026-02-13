<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Routes publiques (accessibles par tous)
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::resource('/categories', CategoryController::class)->only(['index', 'show']);
Route::resource('/products', ProductController::class)->only(['index', 'show']);

// Routes d'authentification (uniquement pour les invités)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('registerValid');
    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/loginValid', [LoginController::class, 'login'])->name('loginValid');
});

// Routes protégées (uniquement pour les utilisateurs authentifiés)
Route::middleware('auth')->group(function () {
    // Routes d'administration
    Route::resource('/categories', CategoryController::class)->except(['index', 'show']);
    Route::resource('/products', ProductController::class)->except(['index', 'show']);
    
    // Routes du panier
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    
    // Déconnexion
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;
use App\Http\Livewire\ShoppingCart;

Route::get('/', WellcomeController::class);

Route::get('search', SearchController::class)->name('search');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('products/{product}',[ProductsController::class ,'show'])->name('products.show');

Route::get('shopping-cart',ShoppingCart::class)->name('shopping-cart');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function () {
    \Cart::destroy();
});

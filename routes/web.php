<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuppliersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit']);('products.edit');
Route::patch('/products/{id}', [ProductsController::class, 'update'])->name('products.update');

Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers.index');
Route::get('suppliers/create', [SuppliersController::class, 'create'])->name('suppliers.create');
Route::post('/suppliers', [SuppliersController::class, 'store'])->name('suppliers.store');
Route::get('/suppliers/{id}', [SuppliersController::class, 'show'])->name('suppliers.show');
Route::get('/suppliers/{id}/edit', [SuppliersController::class, 'edit'])->name('suppliers.edit');
Route::patch('/suppliers/{id}', [SuppliersController::class, 'update'])->name('suppliers.update');
require __DIR__.'/auth.php';

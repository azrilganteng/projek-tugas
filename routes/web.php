<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('export-excel',[UserController::class, 'export_excel']);


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


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    // Route::get('admin/product', [HomeController::class, 'create'])->name('admin.product');
    Route::post('admin/product/create', [HomeController::class, 'store'])->name('admin.product.store');
    Route::get('admin/product/create', [HomeController::class, 'create'])->name('admin.product.create');  
    Route::get('admin/product/{id}/edit', [HomeController::class, 'edit'])->name('admin.product.edit');
    Route::put('/products/{id}', [HomeController::class, 'update'])->name('product.update');
    Route::delete('admin/product/{id}/hapus', [HomeController::class, 'destroy'])->name('product.destroy');
    
   
    // routes/web.php
    // Route::get('admin/products/crud', [ProductController::class, 'crud'])->name('admin.product.crud');

});


 

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPdfController;

Route::get('export-pdf', [ProductPdfController::class, 'exportPdf']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('upload-pdf', function() {
    return view('products.upload');
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
    Route::get('export', [ProductController::class, 'export'])->name('export');
    Route::post('import', [ProductController::class, 'import'])->name('import');
    Route::get('export-pdf', [ProductPdfController::class, 'export'])->name('exportPdf');
    Route::get('export-excel',[ProductController::class, 'export_excel']);
    Route::get('admin/importPage', [HomeController::class, 'importPage'])->name('admin.importPage');
    Route::post('/import', [ImportController::class, 'import'])->name('import');

    // routes/web.php
    // Route::get('admin/products/crud', [ProductController::class, 'crud'])->name('admin.product.crud');

});


 

require __DIR__ . '/auth.php';

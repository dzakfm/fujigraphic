<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/product', [ProductController::class, 'product'])->name('product');

// routes/web.php
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/category', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
Route::post('/admin/product', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
Route::delete('/admin/category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
Route::delete('/admin/product/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::put('/admin/category/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');
Route::put('/admin/product/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');




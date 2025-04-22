<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');


Route::get('/product', [ProductController::class, 'product'])->name('product');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// routes/web.php
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/category', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
Route::post('/admin/product', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
Route::delete('/admin/category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
Route::delete('/admin/product/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::put('/admin/category/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');
Route::put('/admin/product/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
Route::post('/admin/article', [AdminController::class, 'storeArticle'])->name('admin.storeArticle');
Route::put('/admin/article/{id}', [AdminController::class, 'updateArticle'])->name('admin.updateArticle');
Route::delete('/admin/article/{id}', [AdminController::class, 'deleteArticle'])->name('admin.deleteArticle');
Route::post('/contact', [AdminController::class, 'storeContact']);
Route::delete('/admin/contacts/{id}', [AdminController::class, 'destroyContact'])->name('contacts.destroy');

//routes artikel
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.detail');
Route::get('/admin/artikel/{id}/edit', [AdminController::class, 'editArticle'])->name('admin.editArticle');
Route::put('/admin/artikels/{id}', [AdminController::class, 'updateArticle'])->name('admin.updateArticle');

//login Admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware('auth:admin')
    ->name('admin.dashboard');





Route::get('/profile', [PageController::class, 'profile'])->name('profile');


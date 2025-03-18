<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

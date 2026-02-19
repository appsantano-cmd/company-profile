<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Halaman utama dengan controller
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman lainnya (bisa dibuatkan controller terpisah nanti)
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk dashboard (untuk Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


// Route untuk test
Route::get('/test', function () {
    return 'Routing berfungsi dengan baik!';
});
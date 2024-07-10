<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/welcome', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/services', function () {
    return view('services');
});
Route::get('/customersearches', function () {
    return view('customersearches');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/recipes', function () {
    return view('recipes');
});
=======


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Ürünler yönetimi
Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/admin/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
Route::post('/admin/products/store', [AdminController::class, 'storeProduct'])->name('admin.products.store');
Route::delete('/admin/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');


Route::get('/hakkımızda', function () {
    return view('layouts/aboutus');
});

Route::get('/hizmetlerimiz', function () {
    return view('layouts/services');
});

Route::get('/tuketici-arastirmalari', function () {
    return view('layouts/customersearches');
});

Route::get('/urun-ekle', function () {
    return view('admin/products');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

});

>>>>>>> origin/main

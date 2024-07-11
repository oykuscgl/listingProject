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

Route::get('/userHomePage', function () {
    return view('layouts/userHomePage');
})->name('userHomePage');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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
    Route::get('admin/adminDashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
});



>>>>>>> origin/main

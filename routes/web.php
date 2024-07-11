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

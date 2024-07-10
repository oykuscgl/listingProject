<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

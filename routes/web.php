<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('layouts.services');
});
Route::get('/customersearches', function () {
    return view('layouts.customersearches');
});
Route::get('/aboutus', function () {
    return view('layouts.aboutus');
});
Route::get('/recipe', function () {
    return view('layouts.recipe');
});

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/{recipe_id}', [RecipeController::class, 'show'])->name('recipes.show');



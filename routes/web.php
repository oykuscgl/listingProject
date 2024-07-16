<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;


//User Actions

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/customersearches', function () {
    return view('layouts.customersearches');
});
Route::get('/aboutus', function () {
    return view('layouts.aboutus');
});

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe_id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{newsPost_id}', [NewsController::class, 'show'])->name('news.show');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service_id}', [ServiceController::class, 'show'])->name('services.show');


//Admin Actions
Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('admin.adminDashboard');

Route::get('/admin/product-management', [AdminController::class, 'manageProducts'])->name('admin.products.index');

Route::get('products/create', [AdminController::class, 'showAddProductForm'])->name('admin.products.create');

Route::get('/admin/recipe-management', [AdminController::class, 'recipeManagement'])->name('admin.recipeManagement');

Route::get('/admin/service-management', [AdminController::class, 'serviceManagement'])->name('admin.serviceManagement');

Route::get('/admin/consumer-research', [AdminController::class, 'consumerResearch'])->name('admin.consumerResearch');

Route::get('/admin/company-info', [AdminController::class, 'companyInfo'])->name('admin.companyInfo');

Route::get('/admin/news-management', [AdminController::class, 'newsManagement'])->name('admin.newsManagement');

Route::get('/admin/blog-management', [AdminController::class, 'blogManagement'])->name('admin.blogManagement');

Route::get('/admin/hr', [AdminController::class, 'hr'])->name('admin.hr');

Route::get('/admin/company', [AdminController::class, 'company'])->name('admin.company');

Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');


<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerSearchController;
use App\Http\Controllers\auth\AuthenticatedSessionController;


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

//User Actions

Route::get('/', function () {
    return view('layouts.app');
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


Route::get('/products',[ProductController::class, 'index'])->name('products.index');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe_id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{newsPost_id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service_id}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blogPost_id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/consumer-research', [CustomerSearchController::class, 'index'])->name('researches.index');
Route::get('/consumer-research/{research_id}', [CustomerSearchController::class, 'show'])->name('researches.show');


//Admin Actions
Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('admin.adminDashboard');


//product management
Route::get('/adminDashboard/product-management', [AdminController::class, 'manageProducts'])->name('admin.products.index');
Route::get('/admin/products', [AdminController::class, 'manageProducts'])->name('admin.products.index');
Route::get('/admin/products/create', [AdminController::class, 'showAddProductForm'])->name('admin.products.create');
Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
Route::get('/admin/products/{product}/edit', [AdminController::class, 'showEditProductForm'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.destroy');


//recipe management
Route::get('/admin/recipe-management', [AdminController::class, 'recipeManagement'])->name('admin.recipes.index');
Route::get('/admin/recipes/create', [AdminController::class, 'showAddRecipeForm'])->name('admin.recipes.create');
Route::post('/admin/recipes', [AdminController::class, 'storeRecipe'])->name('admin.recipes.store');
Route::get('/admin/recipes/{recipe}/edit', [AdminController::class, 'editRecipe'])->name('admin.recipes.edit');
Route::put('/admin/recipes/{recipe}', [AdminController::class, 'updateRecipe'])->name('admin.recipes.update');
Route::delete('/admin/recipes/{recipe}', [AdminController::class, 'destroyRecipe'])->name('admin.recipes.destroy');


//news management
Route::get('/admin/news-management', [AdminController::class, 'newsManagement'])->name('admin.news.index');
Route::get('/admin/news/create', [AdminController::class, 'showAddNewsForm'])->name('admin.news.create');
Route::post('/admin/news', [AdminController::class, 'storeNews'])->name('admin.news.store');
Route::get('/admin/news/{news_id}/edit', [AdminController::class, 'editNews'])->name('admin.news.edit');
Route::put('/admin/news/{news_id}', [AdminController::class, 'updateNews'])->name('admin.news.update');
Route::delete('/admin/news/{news_id}', [AdminController::class, 'destroyNews'])->name('admin.news.destroy');


//service management
Route::get('/admin/service-management', [AdminController::class, 'servicesManagement'])->name('admin.services.index');
Route::get('/admin/services/create', [AdminController::class, 'showAddServiceForm'])->name('admin.services.create');
Route::post('/admin/services', [AdminController::class, 'storeServices'])->name('admin.services.store');
Route::get('/admin/services/{service_id}/edit', [AdminController::class, 'editServices'])->name('admin.services.edit');
Route::put('/admin/services/{service_id}', [AdminController::class, 'updateServices'])->name('admin.services.update');
Route::delete('/admin/services/{service_id}', [AdminController::class, 'destroyServices'])->name('admin.services.destroy');


//consumer research management
Route::get('/admin/consumer-research', [AdminController::class, 'consumerResearchManagement'])->name('admin.consumerResearches.index');
Route::get('/admin/consumer-research/create', [AdminController::class, 'showAddResearchForm'])->name('admin.consumerResearches.create');
Route::post('/admin/consumer-research', [AdminController::class, 'storeResearch'])->name('admin.consumerResearches.store');
Route::get('/admin/consumer-research/{research_id}/edit', [AdminController::class, 'editResearch'])->name('admin.consumerResearches.edit');
Route::put('/admin/consumer-research/{research_id}', [AdminController::class, 'updateResearch'])->name('admin.consumerResearches.update');
Route::delete('/admin/consumer-research/{research_id}', [AdminController::class, 'destroyResearch'])->name('admin.consumerResearches.destroy');


//blog management
Route::get('/admin/blog-management', [AdminController::class, 'blogManagement'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [AdminController::class, 'showAddBlogPostForm'])->name('admin.blogs.create');
Route::post('/admin/blogs', [AdminController::class, 'storeBlogPost'])->name('admin.blogs.store');
Route::get('/admin/blogs/{blogPost_id}/edit', [AdminController::class, 'editBlogPost'])->name('admin.blogs.edit');
Route::put('/admin/blogs/{blogPost_id}', [AdminController::class, 'updateBlogPost'])->name('admin.blogs.update');
Route::delete('/admin/blogs/{blogPost_id}', [AdminController::class, 'destroyBlogPost'])->name('admin.blogs.destroy');


//about us management
Route::get('/admin/company-info', [AdminController::class, 'companyInfo'])->name('admin.companyInfo');
Route::get('/admin/company-info/create', [AdminController::class, 'showAddBlogPostForm'])->name('admin.infos.create');
Route::post('/admin/company-info', [AdminController::class, 'storeBlogPost'])->name('admin.blogs.store');
Route::get('/admin/company-info/{info_id}/edit', [AdminController::class, 'editBlogPost'])->name('admin.infos.edit');
Route::put('/admin/company-info/{info_id}', [AdminController::class, 'updateBlogPost'])->name('admin.infos.update');
Route::delete('/admin/company-info/{info_id}', [AdminController::class, 'destroyBlogPost'])->name('admin.infos.destroy');



//hr management
Route::get('/admin/hr', [AdminController::class, 'hr'])->name('admin.hr');


//company management
Route::get('/admin/company', [AdminController::class, 'company'])->name('admin.company');


//contact info management
Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');

Route::get('/contact', function () {
    return view('layouts.communication');
});
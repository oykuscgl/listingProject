<?php
use App\Http\Middleware\AdminMiddleware;
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
use App\Http\Controllers\CompanyInfoController;


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


Route::get('/main', function () {
    return view('layouts.main');
});


Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product_id}', [RecipeController::class, 'show'])->name('products.show');


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

Route::get('/aboutUs', [CompanyInfoController::class, 'index'])->name('aboutUs.index');
Route::get('/aboutUs/{info_id}', [CompanyInfoController::class, 'show'])->name('aboutUs.show');


//Admin Dashboard
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.adminDashboard');


//ADMIN ACTIONS
Route::prefix('admin/')->name('admin.')->group(function () {
//consumer research management
Route::get('consumer-research', [AdminController::class, 'consumerResearchManagement'])->name('consumerResearches.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('consumer-research/create', [AdminController::class, 'showAddResearchForm'])->name('consumerResearches.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('consumer-research', [AdminController::class, 'storeResearch'])->name('consumerResearches.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('consumer-research/{research_id}/edit', [AdminController::class, 'editResearch'])->name('consumerResearches.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('consumer-research/{research_id}', [AdminController::class, 'updateResearch'])->name('consumerResearches.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('consumer-research/{research_id}', [AdminController::class, 'destroyResearch'])->name('consumerResearches.destroy')->middleware(['auth', AdminMiddleware::class]);


//blog management
Route::get('blog-management', [AdminController::class, 'blogManagement'])->name('blogs.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('blogs/create', [AdminController::class, 'showAddBlogPostForm'])->name('blogs.create')->middleware(['auth', AdminMiddleware::class]);
Route::get('blogs/{blogPost_id}', [AdminController::class,'seeBlogPost'])->name('blogs.show');
Route::post('blogs', [AdminController::class, 'storeBlogPost'])->name('blogs.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('blogs/{blogPost_id}/edit', [AdminController::class, 'editBlogPost'])->name('blogs.edit')->middleware(['auth', AdminMiddleware::class]);
Route::post('blogs/{blogPost_id}', [AdminController::class, 'updateBlogPost'])->name('blogs.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('blogs/{blogPost_id}', [AdminController::class, 'destroyBlogPost'])->name('blogs.destroy')->middleware(['auth', AdminMiddleware::class]);


//service management
Route::get('service-management', [AdminController::class, 'servicesManagement'])->name('services.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('services/create', [AdminController::class, 'showAddServiceForm'])->name('services.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('services', [AdminController::class, 'storeServices'])->name('services.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('services/{service_id}/edit', [AdminController::class, 'editServices'])->name('services.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('services/{service_id}', [AdminController::class, 'updateServices'])->name('services.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('services/{service_id}', [AdminController::class, 'destroyServices'])->name('services.destroy')->middleware(['auth', AdminMiddleware::class]);


//news management
Route::get('/news-management', [AdminController::class, 'newsManagement'])->name('news.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('/news/create', [AdminController::class, 'showAddNewsForm'])->name('news.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('/news', [AdminController::class, 'storeNews'])->name('news.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('/news/{news_id}/edit', [AdminController::class, 'editNews'])->name('news.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('/news/{news_id}', [AdminController::class, 'updateNews'])->name('news.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('/news/{news_id}', [AdminController::class, 'destroyNews'])->name('news.destroy')->middleware(['auth', AdminMiddleware::class]);


//about us management
Route::get('company-info', [AdminController::class, 'companyInfoManagement'])->name('aboutUs.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('company-info/create', [AdminController::class, 'showAddInfoForm'])->name('aboutUs.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('company-info', [AdminController::class, 'storeInfo'])->name('aboutUs.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('company-info/{info_id}/edit', [AdminController::class, 'editInfo'])->name('aboutUs.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('company-info/{info_id}', [AdminController::class, 'updateInfo'])->name('aboutUs.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('company-info/{info_id}', [AdminController::class, 'destroyInfo'])->name('aboutUs.destroy')->middleware(['auth', AdminMiddleware::class]);


//recipe management
Route::get('recipe-management', [AdminController::class, 'recipeManagement'])->name('recipes.index')->middleware(['auth', AdminMiddleware::class])->middleware(['auth', AdminMiddleware::class]);
Route::get('recipes/create', [AdminController::class, 'showAddRecipeForm'])->name('recipes.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('recipes', [AdminController::class, 'storeRecipe'])->name('recipes.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('recipes/{recipe}/edit', [AdminController::class, 'showEditRecipeForm'])->name('recipes.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('recipes/{recipe}', [AdminController::class, 'updateRecipe'])->name('recipes.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('recipes/{recipe}', [AdminController::class, 'destroyRecipe'])->name('recipes.destroy')->middleware(['auth', AdminMiddleware::class]);


//product management
Route::get('products', [AdminController::class, 'manageProducts'])->name('products.index')->middleware(['auth', AdminMiddleware::class]);
Route::get('products/create', [AdminController::class, 'showAddProductForm'])->name('products.create')->middleware(['auth', AdminMiddleware::class]);
Route::post('products', [AdminController::class, 'storeProduct'])->name('products.store')->middleware(['auth', AdminMiddleware::class]);
Route::get('products/{product}/edit', [AdminController::class, 'showEditProductForm'])->name('products.edit')->middleware(['auth', AdminMiddleware::class]);
Route::put('products/{product}', [AdminController::class, 'updateProduct'])->name('products.update')->middleware(['auth', AdminMiddleware::class]);
Route::delete('products/{product}', [AdminController::class, 'deleteProduct'])->name('products.destroy')->middleware(['auth', AdminMiddleware::class]);
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');




});


//hr management
Route::get('/admin/hr', [AdminController::class, 'hr'])->name('admin.hr');

//contact info management
Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');


<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Recipe;
use App\Models\Service;
use App\Models\Category;
use App\Models\ConsumerInsight;
use App\Models\AboutUs;
use App\Models\News;
use App\Models\Blog;
use App\Models\HumanResource;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\RecipeRequest;
use App\Http\Requests\NewsPostRequest;
use App\Http\Requests\ServiceRequest;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Admin panelinin ana sayfası
        return view('admin/adminDashboard');
    }



    //PRODUCT CONTROL
    public function manageProducts()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function showAddProductForm()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function storeProduct(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('admin.products.index')->with('success', 'Product added successfully');
    }

    public function showEditProductForm(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProduct(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }


    //RECIPE CONTROL

    public function recipeManagement()
    {
        $recipes = Recipe::all('id','title');
        return view('admin.recipes.index', compact('recipes'));
    }

    public function showAddRecipeForm()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.create', compact('recipes'));
    }

    public function createRecipe()
    {
        return view('admin.recipes.create');
    }

    public function storeRecipe(RecipeRequest $request)
    {
        Recipe::create($request->validated());
        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editRecipe(Recipe $recipe)
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    public function updateRecipe(RecipeRequest $request, Recipe $recipe)
    {
        $recipe->update($request->validated());
        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function destroyRecipe(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla silindi.');
    }



    //NEWS CONTROL
    public function newsManagement()
    {
        // Haberler yönetimi sayfası
        $news = News::all('id','title');
        return view('admin.news.index', compact('news'));
    }

    public function showAddNewsForm()
    {
        $news = News::all();
        return view('admin.news.create', compact('news'));
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(NewsPostRequest $request)
    {
        News::create($request->validated());
        return redirect()->route('admin.news.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editNews($id)
    {
        $new = News::findOrFail($id);
        return view('admin.news.edit', compact('new'));
    }

    public function updateNews(NewsPostRequest $request, News $new)
    {
        $new->update($request->validated());
        return redirect()->route('admin.news.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function destroyNews($news_id)
    {
        // Haber kaydını bul ve sil
        $news = News::findOrFail($news_id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla silindi.');
    }

    //SERVICE CONTROL
    public function servicesManagement()
    {
        // Haberler yönetimi sayfası
        $services = Service::all('id','title');
        return view('admin.services.index', compact('services'));
    }

    public function showAddServiceForm()
    {
        $services = Service::all();
        return view('admin.services.create', compact('services'));
    }

    public function createServices()
    {
        return view('admin.services.create');
    }

    public function storeServices(ServiceRequest $request)
    {
        Service::create($request->validated());
        return redirect()->route('admin.services.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editServices($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function updateServices(ServiceRequest $request, Service $new)
    {
        $new->update($request->validated());
        return redirect()->route('admin.services.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function destroyServices($service_id)
    {
        // Haber kaydını bul ve sil
        $services = Service::findOrFail($service_id);
        $services->delete();
        return redirect()->route('admin.services.index')->with('success', 'Haber başarıyla silindi.');
    }



    //CONSUMER RESEARCH CONTROL
    public function consumerResearch()
    {
        // Tüketici araştırmaları sayfası
        return view('admin.consumerResearch');
    }



    //COMPANY INFO CONTROL
    public function companyInfo()
    {
        // Firma hakkında bilgisi sayfası
        return view('admin.companyInfo');
    }

    //BLOG CONTROL
    public function blogManagement()
    {
        // Blog yönetimi sayfası
        return view('admin.blogManagement');
    }




    //HUMAN RESOURCES CONTROL
    public function hr()
    {
        // İnsan kaynakları yönetimi sayfası
        return view('admin.hr');
    }



    //CONTACT CONTROL
    public function contact()
    {
        // Firma iletişim sayfası
        return view('admin.contact');
    }
}

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


class AdminController extends Controller
{
    public function dashboard()
    {
        // Admin panelinin ana sayfası
        return view('admin/adminDashboard');
    }

    public function productManagement()
    {
        // Ürün yönetimi sayfası
        return view('admin.productManagement');
    }

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

    public function recipeManagement()
    {
        // Tarif yönetimi sayfası
        return view('admin.recipeManagement');
    }

    public function serviceManagement()
    {
        // Firma hizmetleri sayfası
        return view('admin.serviceManagement');
    }

    public function consumerResearch()
    {
        // Tüketici araştırmaları sayfası
        return view('admin.consumerResearch');
    }

    public function companyInfo()
    {
        // Firma hakkında bilgisi sayfası
        return view('admin.companyInfo');
    }

    public function newsManagement()
    {
        // Haberler yönetimi sayfası
        return view('admin.newsManagement');
    }

    public function blogManagement()
    {
        // Blog yönetimi sayfası
        return view('admin.blogManagement');
    }

    public function hr()
    {
        // İnsan kaynakları yönetimi sayfası
        return view('admin.hr');
    }

    public function company()
    {
        // Firma sayfası
        return view('admin.company');
    }

    public function contact()
    {
        // Firma iletişim sayfası
        return view('admin.contact');
    }
}

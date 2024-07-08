<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Recipe;
use App\Models\Service;
use App\Models\ConsumerInsight;
use App\Models\AboutUs;
use App\Models\News;
use App\Models\Blog;
use App\Models\HumanResource;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Sadece yetkili kullanıcılar erişebilsin
    }

    public function index()
    {
        // Admin panelinin ana sayfası
        return view('admin.index');
    }

    // Ürünler yönetimi
    public function products()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function createProduct()
    {
        // Yeni ürün ekleme formu
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        // Yeni ürünü kaydetme
        Product::create($request->all());
        return redirect()->route('admin.products')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function deleteProduct(Product $product)
    {
        // Ürünü silme
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Ürün başarıyla silindi.');
    }

    // Bu fonklar diğer sayfalar için de olucak
}

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
use App\Http\Requests\Xre;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        // Admin panelinin ana sayfası
        return view('admin/adminDashboard');
    }

    public function createProduct(Xre $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id; //

        return redirect()->route('');
    }

    public function deleteProdut(Xre $request)
    {
        $product = Product::find($request->product_id);
        $product->delete();
        return redirect()->route('');
    }

    public function editProduct(Xre $request)
    {
        $product = Product::find($request->product_id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        return redirect()->route('');
    }

    public function createRecipe(Xre $request)
    {
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->category= $request->category;
        $recipe->detailed_info = $request->detailed_info;

    }

    public function editRecipe(Xre $request)

    {
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->category= $request->category;
        $recipe->detailed_info = $request->detailed_info;

        return redirect()->route('');
    }



}

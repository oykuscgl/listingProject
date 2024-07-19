<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('layouts.products', ['products' => $products]);
    }

    public function show($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('layouts.recipe', ['product' => $product]);
    }




}

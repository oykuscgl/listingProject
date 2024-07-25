<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BlogPost;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $blogs = BlogPost::all();
        return view('layouts.main', compact('products','blogs'));
    }

    public function blogindex()
{
    $blogs = BlogPost::all(); // Or use the appropriate method to get your blog data
    return view('layouts.main', compact('blogs'));
}

}

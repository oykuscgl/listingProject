<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = News::all();
        return view('layouts.blog', ['blogs' => $blogs]);
    }

    public function show($blogPost_id)
    {
        $blogPost = News::findOrFail($blogPost_id);
        return view('layouts.blogPost', ['blogPost' => $blogPost]);
    }

}

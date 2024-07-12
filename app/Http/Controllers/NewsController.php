<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('layouts.news', ['news' => $news]);
    }

    public function show($newsPost_id)
    {
        $newsPost = News::findOrFail($newsPost_id);
        return view('layouts.newsPost', ['newsPost' => $newsPost]);
    }

}

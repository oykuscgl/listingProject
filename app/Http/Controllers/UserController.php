<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Recipe;
use App\Models\User;
use App\Models\ConsumerInsight;
use App\Models\AboutUs;
use App\Models\News;
use App\Models\Blog;
use App\Models\HumanResource;
use Illuminate\Http\Request;
use App\Http\Requests\Xre;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view("", compact("users"));
    }


}

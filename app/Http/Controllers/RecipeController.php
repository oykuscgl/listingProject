<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();
        return view('layouts.recipes', ['recipes' => $recipes]);
    }

    public function show($recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);
        return view('layouts.recipe', ['recipe' => $recipe]);
    }

}

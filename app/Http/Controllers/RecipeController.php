<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $query = Recipe::with('category');

        // Filtreleme işlemi
        if ($request->has('filter')) {
            $filter = $request->input('filter');
            $query->whereHas('category', function ($query) use ($filter) {
                $query->where('name', $filter);
            });
        }

        // Sıralama işlemi
        $sort = $request->query('sort', 'title'); // Varsayılan olarak başlığa göre sıralama

        switch ($sort) {
            case 'title':
                $query->orderBy('title');
                break;
            case 'category':
                $query->join('categories', 'recipes.category_id', '=', 'categories.id')
                      ->orderBy('categories.name');
                break;
            case 'date':
                $query->orderBy('created_at', 'desc');
                break;
            case 'alphabetical':
                $query->orderBy('title');
                break;
            default:
                $query->orderBy('title'); // Varsayılan sıralama
                break;
        }

        $recipes = $query->get();

        return view('layouts.recipes', [
            'recipes' => $recipes,
            'selectedFilter' => $request->input('filter', ''), // Varsayılan olarak boş
            'selectedSort' => $request->query('sort', 'title') // Varsayılan olarak başlığa göre sıralama
        ]);
    }

    public function show($recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);
        $recipes = Recipe::all();
        return view('layouts.recipe', ['recipe' => $recipe, 'recipes' => $recipes]);
    }
}

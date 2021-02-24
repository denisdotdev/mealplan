<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index()
    {
        return view('recipes.index');
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }
}

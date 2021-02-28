<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
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

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->recipeImage = optional($request->file('recipeImage'))->store('recipes');
        $recipe->save();
    }

    public function edit()
    {
        return view('recipes.edit');
    }

    public function update(Request $request)
    {
        $request->validate([

        ]);
    }
}

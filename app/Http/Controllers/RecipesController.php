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

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required'
        ]);

        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->recipeImage = optional($request->file('recipeImage'))->store('recipes');
        $recipe->save();

        return redirect()->intended('recipes');
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([

        ]);
    }

    public function destroy(Recipe $recipe)
    {
        try {
            $recipe->delete();
        } catch (\Exception $e) {

        }
    }
}

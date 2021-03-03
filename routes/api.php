<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Recipe;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth'])->group(function() {
    Route::prefix('recipes')->group(function() {
        // List of recipes
        Route::get('/', function () {
            return Recipe::all();
        });
    });
});

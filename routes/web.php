<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipesController;

// Models
use App\Models\Recipe;

Route::get('/', function () {
    return view('index');
});

// Authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_post'])->name('login_post');
Route::get('register', [AuthController::class, 'register'])->name('register');

// Before anything can happen, the user has to setup the application!
Route::get('setup', [AuthController::class, 'setup'])->name('setup');

Route::middleware(['auth'])->group(function() {
    Route::get('recipes', [RecipesController::class, 'index'])->name('recipes');
    Route::get('recipes', [RecipesController::class, 'new'])->name('recipes_create');
    Route::get('recipes/{recipe}', [RecipesController::class, 'show'])->name('recipe_show');
});

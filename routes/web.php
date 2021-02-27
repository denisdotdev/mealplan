<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ShoppingListsController;

// Authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_post'])->name('login_post');
Route::get('register', [AuthController::class, 'register'])->name('register');

// Before anything can happen, the user has to setup the application!
Route::get('setup', [AuthController::class, 'setup'])->name('setup');
Route::post('setup', [AuthController::class, 'setup_post'])->name('setup_post');

Route::middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('index');
    });

    Route::prefix('recipes')->group(function() {
        Route::get('/', [RecipesController::class, 'index'])->name('recipes');
        Route::get('/create', [RecipesController::class, 'new'])->name('recipes_create');
        Route::get('/{recipe}', [RecipesController::class, 'show'])->name('recipe_show');
    });

    Route::prefix('shopping-lists')->group(function() {
        Route::get('/', [ShoppingListsController::class, 'index'])->name('shopping_lists');
        Route::get('/{shoppingList}', [ShoppingListsController::class, 'show'])->name('shopping_list_view');
    });
});

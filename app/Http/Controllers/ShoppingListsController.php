<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;

class ShoppingListsController extends Controller
{
    public function index()
    {

    }

    public function show(ShoppingList $shoppingList)
    {
        return view('shopping_lists.show');
    }

    public function create()
    {
        return view('shopping_lists.create');
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);

        $shoppingList = new ShoppingList;
        $shoppingList->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;

class ShoppingListsController extends Controller
{
    public function index()
    {
        return view('shopping_lists.index');
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

    public function edit()
    {
        return view('shopping_lists.edit');
    }

    public function update(Request $request, ShoppingList $shoppingList)
    {
        $request->validate([

        ]);

        $shoppingList->save();
    }

    public function destroy(ShoppingList $shoppingList)
    {
        try {
            $shoppingList->delete();
        } catch (\Exception $e) {

        }
    }
}

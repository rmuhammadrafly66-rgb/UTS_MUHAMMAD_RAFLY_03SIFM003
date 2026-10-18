<?php

namespace App\Http\Controllers;

use App\Models\Furniture;

class FurnitureController extends Controller
{
    public function index()
    {
        $furnitures = Furniture::all();
        return view('furniture.index', compact('furnitures'));
    }

    public function show($id)
    {
        $item = Furniture::findOrFail($id);
        return view('furniture.show', compact('item'));
    }
}
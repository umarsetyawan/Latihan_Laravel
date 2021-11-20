<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function Index()
    {
        return view('inventory', [
            "title" => "inventory",
            "inventory" => Inventory::all()
        ]);
    }

    public function show ($link)
    {
        return view('invpost', [
            "title" => "Single Post",
            "post" => Inventory::where('link', $link)->first()
        ]);
    }
}

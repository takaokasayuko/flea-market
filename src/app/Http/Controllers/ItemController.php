<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Status;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function sell()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $statuses = Status::all();
        // dd($brand);

        return view('sell', compact('brands', 'categories', 'statuses'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Status;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('index', compact('items'));
    }

    public function favorite()
    {
        $items = Item::all();

        return view('index', compact('items'));
    }

    public function sell()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $statuses = Status::all();

        return view('sell', compact('brands', 'categories', 'statuses'));
    }

    public function create(SellRequest $request)
    {
        $seller_id = Auth::id();
        Item::create([
            'seller_id' => $seller_id,
            'brand_id' => $request['brand_id'],
            'category_id' => $request['category_id'],
            'status_id' => $request['status_id'],
            'name' => $request['name'],
            'image' => $request->file('image')->store('public/image'),
            'detail' => $request['detail'],
            'price' => $request['price']
        ]);

        return redirect('/sell')->with('message', '登録しました');

    }
}

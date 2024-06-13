<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function view(Category $category, Request $request)
    {
        $query = Product::query();

        $query->where('category_id', $category->id);

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->get('search') . '%');
        }

        $products = $query->paginate(12);
        return view('client.catalog', ['products' => $products]);
    }

//    public function update(Category $category, Request $request)
//    {
//        $data = $request->only('data');
//
//        if ()
//    }

    public function removeFromCart(Request $request)
    {

    }
}

<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function view(Request $request)
    {
        $products = Product::with('media')->where('is_published', 1)->filterable()->get();

        return view('client.catalog', compact('products'));
    }

    public function filters(Request $request)
    {
        $data = $request->all();

        return response()->json([
            'url' => $url = route('catalog', $data)
        ]);
    }
}

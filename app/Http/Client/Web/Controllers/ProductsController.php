<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function view(Product $product)
    {
        return view('client.product', ['product' => $product]);
    }
}

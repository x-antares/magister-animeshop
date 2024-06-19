<?php

namespace App\Http\Client\Web\Controllers;


use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $mainCategories = Category::with(['media'])
//            ->where('is_main', 1) // for selected categories and menu categories
            ->withCount('products')
            ->take(4)
//            ->take(12)
            ->get();

        $featuredProducts = Product::with([/*'reviews', */'media'])
            ->where('is_published', 1)
            ->where('is_featured', 1) // for featured products
            ->take(8)
            ->get();


//        $vendors = Vendor::take(8)->get();

        $data = [
            'mainCategories' => $mainCategories,
            'featuredProducts' => $featuredProducts,
        ];

        return view('client.home', ['data' => $data]);
    }
}

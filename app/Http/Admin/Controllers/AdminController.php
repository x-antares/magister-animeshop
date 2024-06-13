<?php

namespace App\Http\Admin\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin', [
            'total' => [
                'categories' => Category::count(),
                'brands' => Brand::count(),
                'products' => Product::count(),
                'orders' => Order::count(),
            ],
        ]);
    }
}

<?php

namespace App\Http\Admin\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    public function edit(Product $product)
    {
        return response()->json([
            'html' => view('admin.products.modal-edit', compact('product'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.products.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('name', 'author_id', 'is_featured', 'short_description', 'body', 'price'));
        $product->mediaManage($request);

        return redirect()->back();
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->only('name', 'author_id', 'is_featured', 'short_description', 'body', 'price'));
        $product->mediaManage($request);

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}

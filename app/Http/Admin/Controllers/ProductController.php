<?php

namespace App\Http\Admin\Controllers;

use App\Models\Product;
use App\Models\Value;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
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
        $product = Product::create($request->only('name', 'category_id', 'brand_id', 'body', 'short_description', 'price', 'is_featured', 'is_published'));
        $product->mediaManage($request);

        return redirect()->back();
    }

    public function update(Product $product, Request $request)
    {
        dd($request->all());

        $product->update($request->only('name', 'category_id', 'brand_id', 'body', 'short_description', 'price', 'is_featured', 'is_published'));
        $product->mediaManage($request);

        $value = Value::where('attribute_id', $request->attribute_id)->where('id', $request->value_id)->first();

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

}

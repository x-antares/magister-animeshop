<?php

namespace App\Http\Admin\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('created_at', 'desc')->get();

        return view('admin.brands.index', ['brands' => $brands]);
    }

    public function edit(Brand $brand)
    {
        return response()->json([
            'html' => view('admin.brands.modal-edit', compact('brand'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.brands.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        $brand = Brand::create($request->only('name'));
        $brand->mediaManage($request);

        return redirect()->back();
    }

    public function update(Brand $brand, Request $request)
    {
        $brand->update($request->only('name'));
        $brand->mediaManage($request);

        return redirect()->back();
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back();
    }
}

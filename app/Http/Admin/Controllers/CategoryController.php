<?php

namespace App\Http\Admin\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function edit(Category $category)
    {
        return response()->json([
            'html' => view('admin.categories.modal-edit', compact('category'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.categories.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->only('name', /*'slug'*/));
        $category->mediaManage($request);

        return redirect()->back();
    }

    public function update(Category $category, Request $request)
    {
        $category->update($request->only('name', /*'slug'*/));
        $category->mediaManage($request);

        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}

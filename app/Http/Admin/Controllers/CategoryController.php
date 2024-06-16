<?php

namespace App\Http\Admin\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_main', 1)->paginate(10);

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
        $category = Category::create($request->only('name'));

        foreach ($request->subCategories ?? [] as $subCategoryName) {
            Category::firstOrCreate(['name' => $subCategoryName, 'parent_id' => $category->id]);
        }

        $category->mediaManage($request);

        return redirect()->back();
    }

    public function update(Category $category, Request $request)
    {
        $category->update($request->only('name'));
        $category->childs()->delete();

        foreach ($request->subCategories ?? [] as $subCategoryName) {
            Category::firstOrCreate(['name' => $subCategoryName, 'parent_id' => $category->id]);
        }

        $category->mediaManage($request);

        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        $category->childs()->delete();
        $category->delete();

        return redirect()->back();
    }

    public function suggestCategory()
    {
        return response()->json([
        ]);
    }
}

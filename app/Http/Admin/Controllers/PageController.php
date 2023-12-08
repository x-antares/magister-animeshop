<?php

namespace App\Http\Admin\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', ['pages' => $pages]);
    }

    public function edit(Page $page)
    {
        return response()->json([
            'html' => view('admin.pages.modal-edit', compact('page'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.pages.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        Page::create($request->only('name', 'slug', 'body'));

        return redirect()->back()
            ->with('success', trans('admin.store.success'));
    }

    public function update(Page $page, Request $request)
    {
        $page->update($request->only('name', 'slug', 'body'));

        return redirect()->back()
            ->with('success', trans('admin.store.success'));
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->back()
            ->with('success', trans('admin.destroy.success'));
    }
}

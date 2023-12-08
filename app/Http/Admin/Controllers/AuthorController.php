<?php

namespace App\Http\Admin\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('admin.authors.index', ['authors' => $authors]);
    }

    public function edit(Author $author)
    {
        return response()->json([
            'html' => view('admin.authors.modal-edit', compact('author'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.authors.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        Author::create($request->only('name', 'slug'));

        return redirect()->back();
    }

    public function update(Author $author, Request $request)
    {
        $author->update($request->only('name', 'slug'));

        return redirect()->back();
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back();
    }
}

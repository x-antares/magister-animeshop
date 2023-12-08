<?php

namespace App\Http\Admin\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index()
    {
        $pictures = Picture::all();
        return view('admin.pictures.index', ['pictures' => $pictures]);
    }

    public function edit(Picture $picture)
    {
        return response()->json([
            'html' => view('admin.pictures.modal-edit', compact('picture'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.pictures.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        $picture = Picture::create($request->only('name', 'author_id', 'slug', 'body'));
        $picture->mediaManage($request);

        return redirect()->back();
    }

    public function update(Picture $picture, Request $request)
    {
        $picture->update($request->only('name', 'author_id', 'slug', 'body'));
        $picture->mediaManage($request);

        return redirect()->back();
    }

    public function destroy(Picture $picture)
    {
        $picture->delete();
        return redirect()->back();
    }

}

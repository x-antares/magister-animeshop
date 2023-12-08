<?php

namespace App\Http\Admin\Controllers;

use App\Models\Author;
use App\Models\Picture;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin', [
            'total' => [
                'authors' => Author::count(),
                'pictures' => Picture::count(),
            ],
        ]);
    }
}

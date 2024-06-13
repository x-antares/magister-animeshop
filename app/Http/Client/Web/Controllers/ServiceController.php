<?php

namespace App\Http\Client\Web\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function help(Request $request)
    {
        $request->validate([
            'email' => 'required|email:strict',
        ]);

        if($request->email) {
            User::create($request->only('email'));
        }
    }
}

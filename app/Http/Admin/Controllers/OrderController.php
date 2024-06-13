<?php

namespace App\Http\Admin\Controllers;

use App\Models\Order;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function view(Order $order)
    {
        return response()->json([
            'html' => view('admin.orders.modal-view', compact('order'))->render()
        ]);
    }
}

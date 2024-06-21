<?php

namespace App\Http\Admin\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();

        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function edit(Order $order)
    {
        return response()->json([
            'html' => view('admin.orders.modal-edit', compact('order'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.orders.modal-create')->render()
        ]);
    }

    public function show(Order $order, Request $request)
    {
        return response()->json([
            'html' => view('admin.orders.modal-edit', compact('order'))->render()
        ]);
    }

    public function store(Request $request)
    {
        $order = Order::create($request->only('status', 'name', 'email', 'total', 'phone', 'address', 'added', 'total'));

        return redirect()->back()->with('success', 'Дані успішно збережені!');
    }

    public function update(Order $order, Request $request)
    {
        $order->update($request->only('status', 'name', 'email', 'total', 'phone', 'address', 'added', 'total'));

        return redirect()->back()->with('success', 'Дані успішно оновлено!');
    }

    public function updateStatus(Order $order, Request $request)
    {
        $order->setAttribute($request->name, $request->value);
        $order->save();

        return response()->json(['message' => 'Дані успішно оновлено!']);
    }
}

<?php

namespace App\Http\Admin\Controllers;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;


class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::paginate(10);

        return view('admin.attributes.index', ['attributes' => $attributes]);
    }

    public function edit(Attribute $attribute)
    {
        return response()->json([
            'html' => view('admin.attributes.modal-edit', compact('attribute'))->render()
        ]);
    }

    public function create(Request $request)
    {
        return response()->json([
            'html' => view('admin.attributes.modal-create')->render()
        ]);
    }

    public function store(Request $request)
    {
        $attribute = Attribute::create($request->only('name'));

        foreach ($request->values ?? [] as $valueName) {
            Value::firstOrCreate(['name' => $valueName, 'attribute_id' => $attribute->id]);
        }

        return redirect()->back();
    }

    public function update(Attribute $attribute, Request $request)
    {
        $attribute->update($request->only('name'));
        $attribute->values()->delete();

        foreach ($request->values ?? [] as $valueName) {
            Value::firstOrCreate(['name' => $valueName, 'attribute_id' => $attribute->id]);
        }

        return redirect()->back();
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->values()->delete();
        $attribute->delete();

        return redirect()->back();
    }

    public function suggestValue()
    {
        return response()->json([
        ]);
    }
}

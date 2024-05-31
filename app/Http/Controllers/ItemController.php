<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'dagangan' => 'required',
            'kontak' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        Item::create($request->all());
        return redirect()->route('items.index');
    }

    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nama' => 'required',
            'dagangan' => 'required',
            'kontak' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $item->update($request->all());
        return redirect()->route('items.index');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
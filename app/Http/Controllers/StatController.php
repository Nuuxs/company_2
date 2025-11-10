<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $stats = Stat::all();
        return view('stats.index', compact('stats'));
    }

    public function create()
    {
        return view('stats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'data_angka' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        Stat::create($request->all());

        return redirect()->route('settings.index')->with('success', 'Data stat berhasil ditambahkan');
    }

    public function edit(Stat $stat)
    {
        return view('stats.edit', compact('stat'));
    }

    public function update(Request $request, Stat $stat)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'data_angka' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        $stat->update($request->all());

        return redirect()->route('settings.index')->with('success', 'Data stat berhasil diperbarui');
    }

    public function destroy(Stat $stat)
    {
        $stat->delete();
        return redirect()->route('settings.index')->with('success', 'Data stat berhasil dihapus');
    }
}

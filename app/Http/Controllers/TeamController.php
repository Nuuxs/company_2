<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'divisi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'link_ig' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_in' => 'nullable|url',
        ]);

        $data = $request->except('gambar');

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        Team::create($data);

        return redirect()->route('settings.index')->with('success', 'Anggota tim berhasil ditambahkan');
    }

    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'divisi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'link_ig' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_in' => 'nullable|url',
        ]);

        $data = $request->except('gambar');

        // Ganti gambar jika ada upload baru
        if ($request->hasFile('gambar')) {
            if ($team->gambar && File::exists(public_path($team->gambar))) {
                File::delete(public_path($team->gambar));
            }
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        $team->update($data);

        return redirect()->route('settings.index')->with('success', 'Anggota tim berhasil diperbarui');
    }

    public function destroy(Team $team)
    {
        if ($team->gambar && File::exists(public_path($team->gambar))) {
            File::delete(public_path($team->gambar));
        }

        $team->delete();

        return redirect()->route('settings.index')->with('success', 'Anggota tim berhasil dihapus');
    }
}

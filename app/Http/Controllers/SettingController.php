<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Stat;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    // Menampilkan data (hanya ambil 1 record)


public function index()
{
    $setting = Setting::first();
    $stats = Stat::all();
    $teams = Team::all();

    return view('settings.index', compact('setting', 'stats', 'teams'));
}


    // Form tambah data (hanya jika belum ada data)
    public function create()
    {
        if (Setting::count() > 0) {
            return redirect()->route('settings.index')
                ->with('error', 'Data sudah ada. Anda hanya bisa mengedit.');
        }
        return view('settings.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'ket_no_hp' => 'required|string|max:255',
            'judul_team' => 'required|string|max:255',
            'subjudul_team' => 'required|string|max:255',
        ]);

        $data = $request->except('gambar');

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        Setting::create($data);

        return redirect()->route('settings.index')->with('success', 'Data berhasil disimpan');
    }

    // Form edit
    public function edit(Setting $setting)
    {
        return view('settings.edit', compact('setting'));
    }

    // Update data
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'ket_no_hp' => 'required|string|max:255',
            'judul_team' => 'required|string|max:255',
            'subjudul_team' => 'required|string|max:255',
        ]);

        $data = $request->except('gambar');

        // Jika ada gambar baru, hapus gambar lama & upload yang baru
        if ($request->hasFile('gambar')) {
            if ($setting->gambar && File::exists(public_path($setting->gambar))) {
                File::delete(public_path($setting->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        $setting->update($data);

        return redirect()->route('settings.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus data
    public function destroy(Setting $setting)
    {
        if ($setting->gambar && File::exists(public_path($setting->gambar))) {
            File::delete(public_path($setting->gambar));
        }

        $setting->delete();

        return redirect()->route('settings.index')->with('success', 'Data berhasil dihapus');
    }
}

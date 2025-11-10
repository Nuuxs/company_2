<?php

namespace App\Http\Controllers;

use App\Models\exploreservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExploreServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
        ]);

        $data = $request->except('icon');

        // Simpan file gambar
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['icon'] = 'uploads/' . $filename;
        }

        exploreservice::create($data);

        return redirect()->route('settingservice.index')->with('success', 'Explore Service berhasil ditambahkan!');
    }

    public function edit(exploreservice $exploreservice)
    {
        return view('admin.settingservice.edit', compact('exploreservice'));
    }

    public function update(Request $request, exploreservice $exploreservice)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
        ]);

        $data = $request->except('icon');

        // Jika ada file baru, hapus file lama & simpan yang baru
        if ($request->hasFile('icon')) {
            // Hapus file lama jika ada
            if ($exploreservice->icon && File::exists(public_path($exploreservice->icon))) {
                File::delete(public_path($exploreservice->icon));
            }

            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['icon'] = 'uploads/' . $filename;
        }

        $exploreservice->update($data);

        return redirect()->route('settingservice.index')->with('success', 'Explore Service berhasil diperbarui!');
    }

    public function destroy(exploreservice $exploreservice)
    {
        // Hapus file icon dari public jika ada
        if ($exploreservice->icon && File::exists(public_path($exploreservice->icon))) {
            File::delete(public_path($exploreservice->icon));
        }

        $exploreservice->delete();

        return redirect()->route('settingservice.index')->with('success', 'Explore Service berhasil dihapus!');
    }
}

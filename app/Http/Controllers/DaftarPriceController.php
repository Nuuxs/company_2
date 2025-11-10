<?php

namespace App\Http\Controllers;

use App\Models\daftarprice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DaftarPriceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_kategori' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        daftarprice::create($data);

        return redirect()->route('settingprice.index')->with('success', 'Daftar Price berhasil ditambahkan!');
    }

    public function edit(daftarprice $daftarprice)
    {
        return view('settingprice.edit-daftarprice', compact('daftarprice'));
    }

    public function update(Request $request, daftarprice $daftarprice)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'nama_kategori' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            // hapus file lama
            if ($daftarprice->gambar && File::exists(public_path($daftarprice->gambar))) {
                File::delete(public_path($daftarprice->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['gambar'] = 'uploads/' . $filename;
        }

        $daftarprice->update($data);

        return redirect()->route('settingprice.index')->with('success', 'Daftar Price berhasil diperbarui!');
    }

    public function destroy(daftarprice $daftarprice)
    {
        if ($daftarprice->gambar && File::exists(public_path($daftarprice->gambar))) {
            File::delete(public_path($daftarprice->gambar));
        }

        $daftarprice->delete();

        return redirect()->route('settingprice.index')->with('success', 'Daftar Price berhasil dihapus!');
    }
}

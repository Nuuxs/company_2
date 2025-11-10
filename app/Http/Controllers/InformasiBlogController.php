<?php

namespace App\Http\Controllers;

use App\Models\informasiblog;
use Illuminate\Http\Request;

class InformasiBlogController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_folder' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $fileName);
            $data['gambar'] = 'uploads/' . $fileName;
        }

        informasiblog::create($data);

        return redirect()->route('settingblog.index')->with('success', 'Informasi Blog berhasil ditambahkan!');
    }

    public function edit(informasiblog $informasiblog)
    {
        return view('settingblog.edit', compact('informasiblog'));
    }

    public function update(Request $request, informasiblog $informasiblog)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_folder' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'text_button' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($informasiblog->gambar && file_exists(public_path($informasiblog->gambar))) {
                unlink(public_path($informasiblog->gambar));
            }

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $fileName);
            $data['gambar'] = 'uploads/' . $fileName;
        }

        $informasiblog->update($data);

        return redirect()->route('settingblog.index')->with('success', 'Informasi Blog berhasil diperbarui!');
    }

    public function destroy(informasiblog $informasiblog)
    {
        if ($informasiblog->gambar && file_exists(public_path($informasiblog->gambar))) {
            unlink(public_path($informasiblog->gambar));
        }

        $informasiblog->delete();

        return redirect()->route('settingblog.index')->with('success', 'Informasi Blog berhasil dihapus!');
    }
}

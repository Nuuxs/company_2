<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        galeri::create($data);

        return redirect()->route('settinghome.index')->with('success', 'Image berhasil ditambahkan!');
    }

    // edit
    public function edit(galeri $galeri)
    {
        return view('settinghome.galeriedit', compact('galeri'));
    }

    // update
    public function update(Request $request, galeri $galeri)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($galeri->image && file_exists(public_path($galeri->image))) {
                unlink(public_path($galeri->image));
            }

            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        $galeri->update($data);

        return redirect()->route('settinghome.index')->with('success', 'image berhasil diperbarui!');
    }

    // destroy
    public function destroy(galeri $galeri)
    {
        if ($galeri->image && file_exists(public_path($galeri->image))) {
            unlink(public_path($galeri->image));
        }

        $galeri->delete();

        return redirect()->route('settinghome.index')->with('success', 'image berhasil dihapus!');
    }
}

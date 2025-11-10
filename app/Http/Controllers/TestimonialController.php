<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name_client' => 'required|string|max:255',
            'profesi_client' => 'required|string|max:255',
        ]);

        // Simpan gambar ke public/testimonials
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('uploads'), $gambarName);

        testimonial::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'name_client' => $request->name_client,
            'profesi_client' => $request->profesi_client,
        ]);

        return redirect()->route('settingservice.index')->with('success', 'Testimonial berhasil ditambahkan!');
    }

    public function edit(testimonial $testimonial)
    {
        return view('admin.settingservice.edit-testimonial', compact('testimonial'));
    }

    public function update(Request $request, testimonial $testimonial)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name_client' => 'required|string|max:255',
            'profesi_client' => 'required|string|max:255',
        ]);

        $data = $request->only(['deskripsi', 'name_client', 'profesi_client']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            $oldPath = public_path('uploads/' . $testimonial->gambar);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);
            $data['gambar'] = $gambarName;
        }

        $testimonial->update($data);

        return redirect()->route('settingservice.index')->with('success', 'Testimonial berhasil diperbarui!');
    }

    public function destroy(testimonial $testimonial)
    {
        $path = public_path('uploads/' . $testimonial->gambar);
        if (File::exists($path)) {
            File::delete($path);
        }

        $testimonial->delete();

        return redirect()->route('settingservice.index')->with('success', 'Testimonial berhasil dihapus!');
    }
}

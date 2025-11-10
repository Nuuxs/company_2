<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = footer::first();
        return view('footer.index', compact('footer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_company'   => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'alamat'         => 'nullable|string',
            'no_hp'          => 'nullable|string|max:50',
            'email'          => 'nullable|email|max:255',
            'link_ig'        => 'nullable|string|max:255',
            'link_fb'        => 'nullable|string|max:255',
            'link_twitter'   => 'nullable|string|max:255',
            'link_in'        => 'nullable|string|max:255',
            'nama_website'   => 'nullable|string|max:255',
            'teks_copyright' => 'nullable|string|max:255',
        ]);

        footer::create($request->all());

        return redirect()->route('footer.index')->with('success', 'Data footer berhasil ditambahkan!');
    }

    public function update(Request $request, footer $footer)
    {
        $request->validate([
            'nama_company'   => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'alamat'         => 'nullable|string',
            'no_hp'          => 'nullable|string|max:50',
            'email'          => 'nullable|email|max:255',
            'link_ig'        => 'nullable|string|max:255',
            'link_fb'        => 'nullable|string|max:255',
            'link_twitter'   => 'nullable|string|max:255',
            'link_in'        => 'nullable|string|max:255',
            'nama_website'   => 'nullable|string|max:255',
            'teks_copyright' => 'nullable|string|max:255',
        ]);

        $footer->update($request->all());

        return redirect()->route('footer.index')->with('success', 'Data footer berhasil diperbarui!');
    }
}

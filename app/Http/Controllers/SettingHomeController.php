<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\settinghome;
use App\Models\sliderfoto;
use Illuminate\Http\Request;

class SettingHomeController extends Controller
{
    public function index()
    {
        $settinghome = settinghome::first();
        $sliderfotos = sliderfoto::all();
        $galeris = galeri::all();

        return view('settinghome.index', compact('settinghome', 'sliderfotos', 'galeris'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'opening' => 'nullable|string',
            'judul' => 'required|string|max:255',
            'email' => 'nullable|email',
            'no_hp' => 'nullable|string|max:20',
            'judul_galery' => 'nullable|string|max:255',
            'subjudul_galery' => 'nullable|string|max:255',
        ]);

        $settinghome = settinghome::first();
        if ($settinghome) {
            $settinghome->update($request->all());
        } else {
            settinghome::create($request->all());
        }

        return redirect()->route('settinghome.index')->with('success', 'Pengaturan Home berhasil diperbarui!');
    }
}

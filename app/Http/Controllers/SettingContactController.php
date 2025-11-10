<?php

namespace App\Http\Controllers;

use App\Models\settingcontact;
use Illuminate\Http\Request;

class SettingContactController extends Controller
{
    public function index()
    {
        $settingcontact = settingcontact::first();
        return view('settingcontact.index', compact('settingcontact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'required|string|max:255',
            'text_link' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url',
            'text_button' => 'nullable|string|max:255',
        ]);

        $settingcontact = settingcontact::first();
        if ($settingcontact) {
            $settingcontact->update($request->all());
        } else {
            settingcontact::create($request->all());
        }

        return redirect()->route('settingcontact.index')->with('success', 'Pengaturan Kontak berhasil diperbarui!');
    }
}

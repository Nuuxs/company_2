<?php

namespace App\Http\Controllers;

use App\Models\informasiblog;
use App\Models\settingblog;
use Illuminate\Http\Request;

class SettingBlogController extends Controller
{
    public function index()
    {
        $settingblog = settingblog::first(); // hanya ambil 1 data
        $informasiblog = informasiblog::all();
        return view('settingblog.index', compact('settingblog', 'informasiblog'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_halaman' => 'required|string|max:255',
        ]);

        $settingblog = settingblog::first();
        if ($settingblog) {
            $settingblog->update($request->all());
        } else {
            settingblog::create($request->all());
        }

        return redirect()->route('settingblog.index')->with('success', 'Setting Blog berhasil diperbarui!');
    }
}

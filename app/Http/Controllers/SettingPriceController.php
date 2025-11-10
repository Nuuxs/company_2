<?php

namespace App\Http\Controllers;

use App\Models\daftarprice;
use App\Models\settingprice;
use Illuminate\Http\Request;

class SettingPriceController extends Controller
{
    public function index()
{
    $settingprice = settingprice::first();
    $daftarprices = daftarprice::all();

    return view('settingprice.index', compact('settingprice', 'daftarprices'));
}

    public function update(Request $request)
    {
        $request->validate([
            'nama_halaman' => 'required|string|max:255',
            'text_price' => 'required|string|max:255',
            'ket_price' => 'required|string',
            'judul_price' => 'required|string|max:255',
            'text_discount' => 'required|string|max:255',
            'discount' => 'required|string|max:255',
            'ket_discount' => 'required|string',
            'deskripsi_discount' => 'required|string',
            'text_button' => 'required|string|max:255',
        ]);

        $settingprice = settingprice::first();

        if ($settingprice) {
            $settingprice->update($request->all());
        } else {
            settingprice::create($request->all());
        }

        return redirect()->route('settingprice.index')->with('success', 'Setting Price berhasil disimpan!');
    }
}

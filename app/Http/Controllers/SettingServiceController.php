<?php

namespace App\Http\Controllers;

use App\Models\settingservice;
use App\Models\exploreservice;
use App\Models\testimonial;
use Illuminate\Http\Request;

class SettingServiceController extends Controller
{
    public function index()
{
    $settingservice = settingservice::first();
    $exploreservices = exploreservice::all();
    $testimonials = testimonial::all(); 

    return view('settingservice.index', compact('settingservice', 'exploreservices', 'testimonials'));
}


    public function update(Request $request, settingservice $settingservice)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'judul_service' => 'required|string|max:255',
            'subjudul_service' => 'required|string|max:255',
            'judul_testimoni' => 'required|string|max:255',
            'subjudul_testimoni' => 'required|string|max:255',
        ]);

        $settingservice->update($request->all());

        return redirect()->route('settingservice.index')->with('success', 'Setting Service berhasil diperbarui!');
    }
}

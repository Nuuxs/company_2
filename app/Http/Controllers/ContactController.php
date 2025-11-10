<?php

namespace App\Http\Controllers;

use App\Models\contactinput;
use App\Models\settingcontact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $settingcontacts = settingcontact::first();
        return view('contact', compact('settingcontacts'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        contactinput::create($validated);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}


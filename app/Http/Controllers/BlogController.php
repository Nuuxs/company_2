<?php

namespace App\Http\Controllers;

use App\Models\informasiblog;
use App\Models\settingblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index()
    {
        $settingblogs = settingblog::first();
        $informasiblogs = informasiblog::all();

        return view('blog', compact('settingblogs', 'informasiblogs', ));
    }
}

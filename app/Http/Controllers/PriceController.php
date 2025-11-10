<?php

namespace App\Http\Controllers;

use App\Models\daftarprice;
use App\Models\settingprice;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        $settingprices = settingprice::first();
        $daftarprices = daftarprice::all();

        return view('price', compact('settingprices', 'daftarprices'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Stat;
use App\Models\Team;

class AboutController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $stats = Stat::all();
        $teams = Team::all();

        return view('about', compact('setting', 'stats', 'teams'));
    }
}

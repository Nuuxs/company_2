<?php

namespace App\Http\Controllers;

use App\Models\exploreservice;
use App\Models\settingservice;
use App\Models\testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $settingservice = settingservice::first();
        $exploreservices = exploreservice::all();
        $testimonials = testimonial::all();

        return view('service', compact('settingservice', 'exploreservices', 'testimonials'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\Setting;
use App\Models\settinghome;
use App\Models\sliderfoto;
use App\Models\Stat;
use App\Models\Team;
use App\Models\exploreservice;
use App\Models\settingservice;
use App\Models\testimonial;
use App\Models\daftarprice;
use App\Models\settingprice;
use App\Models\informasiblog;
use App\Models\settingblog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $settinghome = settinghome::first();
        $sliderfotos = sliderfoto::all();
        $galeris = galeri::all();
        $setting = Setting::first();
        $stats = Stat::all();
        $teams = Team::all();
        $settingservice = settingservice::first();
        $exploreservices = exploreservice::all();
        $testimonials = testimonial::all();
        $settingprices = settingprice::first();
        $daftarprices = daftarprice::all();
        $settingblogs = settingblog::first();
        $informasiblogs = informasiblog::all();

        return view('home', compact(
      'settinghome',
     'sliderfotos',
                'galeris',
                'setting',
                'stats',
                'teams',
                'settingservice',
                'exploreservices',
                'testimonials',
                'settingprices',
                'daftarprices',
                'settingblogs',
                'informasiblogs'


    ));
    }
}

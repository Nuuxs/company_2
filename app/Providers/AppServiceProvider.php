<?php

namespace App\Providers;

use App\Models\footer;
use App\Models\Setting;
use App\Models\settingblog;
use App\Models\settingcontact;
use App\Models\settingprice;
use App\Models\settingservice;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                'footer' => footer::first(),
                'setting' => Setting::first(),
                'settingcontact' => settingcontact::first(),
                'settingservice' => settingservice::first(),
                'settingprice' => settingprice::first(),
                'settingblog' => settingblog::first(),

            ]);

        });

        Carbon::setLocale('id');
    }
}

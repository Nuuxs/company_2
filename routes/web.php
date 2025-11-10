<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthManualController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DaftarPriceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreServiceController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\footerview;
use App\Http\Controllers\FotoHomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiBlogController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingBlogController;
use App\Http\Controllers\SettingContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingHomeController;
use App\Http\Controllers\SettingPriceController;
use App\Http\Controllers\SettingServiceController;
use App\Http\Controllers\SliderFotoController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('');
// })->name('about');


// route yang hanya bisa di akses oleh admin saja








    // Route::get('/dashboard', function () {
    // return view('admin.dashboard');
    // })->name('dashboard') ->middleware(['auth']);

Route::middleware(['auth'])->group(function () {

        Route::resource('settings', SettingController::class);
        Route::resource('stats', StatController::class)->except(['show']);
        Route::resource('teams', TeamController::class)->except(['show']);

});






Route::middleware(['auth'])->group(function () {
    Route::get('settingservice', [SettingServiceController::class, 'index'])->name('settingservice.index');
    Route::put('settingservice/{settingservice}', [SettingServiceController::class, 'update'])->name('settingservice.update');

    Route::post('exploreservice', [ExploreServiceController::class, 'store'])->name('exploreservice.store');
    Route::get('exploreservice/{exploreservice}/edit', [ExploreServiceController::class, 'edit'])->name('exploreservice.edit');
    Route::put('exploreservice/{exploreservice}', [ExploreServiceController::class, 'update'])->name('exploreservice.update');
    Route::delete('exploreservice/{exploreservice}', [ExploreServiceController::class, 'destroy'])->name('exploreservice.destroy');


    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    Route::get('/admin/settingprice', [SettingPriceController::class, 'index'])->name('settingprice.index');
    Route::post('/admin/settingprice/update', [SettingPriceController::class, 'update'])->name('settingprice.update');

    Route::resource('daftarprice', DaftarPriceController::class)->except(['index', 'show']);

    Route::get('/settingblog', [SettingBlogController::class, 'index'])->name('settingblog.index');
    Route::post('/settingblog', [SettingBlogController::class, 'update'])->name('settingblog.update');

    Route::post('/informasiblog', [InformasiBlogController::class, 'store'])->name('informasiblog.store');
    Route::get('/informasiblog/{informasiblog}/edit', [InformasiBlogController::class, 'edit'])->name('informasiblog.edit');
    Route::put('/informasiblog/{informasiblog}', [InformasiBlogController::class, 'update'])->name('informasiblog.update');
    Route::delete('/informasiblog/{informasiblog}', [InformasiBlogController::class, 'destroy'])->name('informasiblog.destroy');

    Route::get('/settingcontact', [SettingContactController::class, 'index'])->name('settingcontact.index');
    Route::post('/settingcontact', [SettingContactController::class, 'update'])->name('settingcontact.update');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

    Route::get('/settinghome', [SettingHomeController::class, 'index'])->name('settinghome.index');
    Route::post('/settinghome', [SettingHomeController::class, 'update'])->name('settinghome.update');

    Route::resource('sliderfoto', SliderFotoController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

    Route::resource('galeri', GaleriController::class)
    ->only(['store', 'edit', 'update', 'destroy']);



});










// route untuk auth manual
Route::get('/login', [AuthManualController::class, 'index'])->name ('login');
Route::post('/loginproses', [AuthManualController::class, 'loginProses'])->name ('loginProses');
Route::post('/logout', [AuthManualController::class, 'logout'])->name ('logout');

// route untuk home dll
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/price', [PriceController::class, 'index'])->name('price');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::resource('footer', FooterController::class)->only(['index', 'store', 'update']);






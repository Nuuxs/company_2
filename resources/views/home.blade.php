@extends('layout.bingkai')

@section('title', 'Home')

@section('content')
    <!-- Hero Start -->

    {{-- @if ($settinghome)

    @endif --}}
    <div class="container-fluid p-0 hero-header bg-light mb-5">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 hero-header-text py-5">
                    <div class="py-5 px-3 ps-lg-0">
                        <h1 class="font-dancing-script text-primary animated slideInLeft">{{ $settinghome->opening }}</h1>
                        <h1 class="display-1 mb-4 animated slideInLeft">{{ $settinghome->judul }}</h1>
                        <div class="row g-4 animated slideInLeft">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flexshrink-0">
                                        <i class="fa fa-phone text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Call Us</h5>
                                        <p class="fs-5 text-dark mb-0">{{ $settinghome->no_hp }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flexshrink-0">
                                        <i class="fa fa-envelope text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Mail Us</h5>
                                        <p class="fs-5 text-dark mb-0">{{ $settinghome->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        @foreach ($sliderfotos as $sliderfoto)
                        <img class="img-fluid" src="{{asset($sliderfoto->image)}}" alt="belum ada">
                        @endforeach

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid mb-3" src="{{ asset($setting->gambar) }}" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flexshrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>+{{ $setting->no_hp }}</h3>
                            <span>{{ $setting->ket_no_hp }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script text-primary">{{ $setting->judul }}</h1>
                    <h1 class="mb-5">{{ $setting->sub_judul }}</h1>
                    <p class="mb-4">{{ $setting->deskripsi }}</p>
                    <div class="row g-3 mb-5">
                        @foreach ( $stats as $stat )


                        <div class="col-sm-6">
                            <div class="bg-light text-center p-4">
                                <i class="{{ $stat->icon }} fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">{{ $stat->data_angka }}</h1>
                                <p class="text-dark text-uppercase mb-0">{{ $stat->keterangan }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="btn btn-primary text-uppercase px-5 py-3" href="">{{ $setting->text_button }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script text-primary">{{ $settingservice->judul_service }}</h1>
                <h1 class="mb-5">{{ $settingservice->subjudul_service }}</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">
                @foreach ($exploreservices as $explore)
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4   wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset($explore->icon) }}" alt="">
                        <h3 class="mb-3">{{ $explore->judul }}</h3>
                        <p class="mb-3">{{ $explore->deskripsi }}</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">{{ $explore->text_button }} <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->

    <p>ni cjashdkaksd</p>


    <!-- Pricing Start -->
    <div class="container-fluid price px-0 py-5">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100 bg-primary p-5">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="font-dancing-script text-white">{{ $settingprices->text_price }}</h1>
                        <h1 class="mb-0">{{ $settingprices->ket_price }}</h1>
                        <h1 class="display-1 text-uppercase mb-5" style="letter-spacing: 10px;">{{ $settingprices->judul_price }}</h1>
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center bg-dark p-5">
                                    <h4 class="text-white">{{ $settingprices->text_discount }}</h4>
                                    <h1 class="display-1 font-work-sans text-white">{{ $settingprices->discount }}</h1>
                                    <p class="fs-2 text-white mb-0">{{ $settingprices->ket_discount }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>{{ $settingprices->deskripsi_discount }}</p>
                                <a class="btn btn-dark" href="">{{ $settingprices->text_button }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-dark p-5">
                    @foreach ($daftarprices as $item )
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid flexshrink-0" src="{{ asset($item->gambar) }}" alt="" style="width: 100px;">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">{{ $item->nama_kategori }}</h6>
                            <h3 class="text-white font-work-sans mb-0">${{ $item->harga }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">{{ $settinghome->judul_gallery }}</h1>
                <h1 class="mb-5">{{ $settinghome->subjudul_gallery }}</h1>
            </div>
            <div class="row g-0">
                @foreach ($galeris as $galeri)


                <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item h-100">
                        <img src="{{ asset($galeri->image) }}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{ asset($galeri->image) }}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-1"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
             @endforeach

            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">{{ $setting->judul_team }}</h1>
                <h1 class="mb-5">{{ $setting->subjudul_team }}</h1>
            </div>
            <div class="row g-4 team">
                @foreach ($teams as $team )
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset($team->gambar) }}" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">{{ $team->jabatan }}</p>
                            <h4>{{ $team->nama }}</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">{{ $settingservice->judul_testimoni }}</h1>
                <h1 class="mb-5">{{ $settingservice->subjudul_testimoni }}</h1>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                @foreach ($testimonials as $testimoni)
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>{{ $testimoni->deskripsi }}</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="{{ asset('uploads/' . $testimoni->gambar) }}" alt="">
                    <h4 class="mb-1">{{ $testimoni->name_client }}</h4>
                    <span>{{ $testimoni->profesi_client }}</span>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid blog p-0 mt-5">
        <div class="row g-0">
            @foreach ($informasiblogs as $informasi)
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                    <p class="mb-2"><i class="fa fa-calendar-alt text-dark me-1"></i>{{ $informasi->created_at->toDateString() }} | <i
                            class="fa fa-folder-open text-dark me-1"></i>{{ $informasi->name_folder }}</p>
                    <h3 class="mb-3">{{ $informasi->judul }}</h3>
                    <p>{{ $informasi->deskripsi }}</p>
                    <a class="btn btn-dark align-self-start text-uppercase" href="">{{ $informasi->text_button }} <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100">
                    <img class="img-fluid w-100 h-100" src="{{ asset($informasi->gambar) }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Blog End -->

@endsection

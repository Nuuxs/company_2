@extends('layout.bingkai')

@section('title', 'Service')

@section('content')

    @if ($settingservice)
        <!-- Hero Start -->
        <div class="container-fluid bg-light page-header py-5 mb-5">
            <div class="container text-center py-5">
                <h1 class="display-1 animated slideInLeft">{{ $settingservice->judul }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $settingservice->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container">
                <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="font-dancing-script text-primary">{{ $settingservice->judul_service }}</h1>
                    <h1 class="mb-5">{{ $settingservice->subjudul_service }}</h1>
                </div>
                <div class="row g-4 g-md-0 text-center">
    @endif

    @if ($exploreservices->count())

        @foreach ($exploreservices as $explore)
            <div class="col-md-6 col-lg-4">
                <div class="service-item h-100 p-4  wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset($explore->icon) }}" alt="">
                    <h3 class="mb-3">{{ $explore->judul }}</h3>
                    <p class="mb-3">{{ $explore->deskripsi }}</p>
                    <a class="btn btn-sm btn-primary text-uppercase" href="">{{ $explore->text_button }}<i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        @endforeach
    @endif
    {{-- <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4  wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="/assets1/img/makeup.png" alt="">
                        <h3 class="mb-3">Makeup</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4  wow fadeIn"
                        data-wow-delay="0.5s">
                        <img class="img-fluid" src="/assets1/img/manicure.png" alt="">
                        <h3 class="mb-3">Manicure</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase my-2" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-bottom-0 border-lg-end wow fadeIn"
                        data-wow-delay="0.1s">
                        <img class="img-fluid" src="/assets1/img/pedicure.png" alt="">
                        <h3 class="mb-3">Pedicure</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-end wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="/assets1/img/massage.png" alt="">
                        <h3 class="mb-3">Massage</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid" src="/assets1/img/skin-care.png" alt="">
                        <h3 class="mb-3">Skin Care</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div> --}}
    </div>
    </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">

            @if ($settingservice)
                <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                    <h1 class="font-dancing-script text-primary">{{ $settingservice->judul_testimoni }}</h1>
                    <h1 class="mb-5">{{ $settingservice->subjudul_testimoni }}</h1>
                </div>
            @endif

            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">

                @if ($testimonials->count())

                    @foreach ($testimonials as $testimoni)
                        <div class="text-center bg-light p-4">
                            <i class="fa fa-quote-left fa-3x mb-3"></i>
                            <p>{{ $testimoni->deskripsi }}</p>
                            <img class="img-fluid mx-auto border p-1 mb-3" src="{{ asset('uploads/' . $testimoni->gambar) }}" alt="">
                            <h4 class="mb-1">{{ $testimoni->name_client }}</h4>
                            <span>{{ $testimoni->profesi_client }}</span>
                        </div>
                    @endforeach

                @endif
                {{-- <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="/assets1/img/testimonial-2.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="/assets1/img/testimonial-3.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="/assets1/img/testimonial-4.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection

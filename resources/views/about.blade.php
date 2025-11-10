@extends('layout.bingkai')

@section('title', 'About')

@section('content')


    <!-- Hero Start -->
    @if ($setting)


    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">{{ $setting->judul }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $setting->judul }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">

                     @if($setting->gambar)
                    <img class="img-fluid mb-3" src="{{ asset($setting->gambar) }}" alt="">
                    @endif

                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>{{ $setting->no_hp }}</h3>
                            <span>{{ $setting->ket_no_hp }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script text-primary">{{ $setting->judul }}</h1>
                    <h1 class="mb-5">{{ $setting->sub_judul }}</h1>
                    <p class="mb-4">{{ $setting->deskripsi }}</p>
                    <div class="row g-3 mb-5">

                        @if ($stats->count())

                            @foreach ($stats as $stat)
                                <div class="col-sm-6">
                                    <div class="bg-light text-center p-4">
                                        <i class="{{ $stat->icon }} fa-4x text-primary"></i>
                                        <h1 class="display-5" data-toggle="counter-up">{{ $stat->data_angka }}</h1>
                                        <p class="text-dark text-uppercase mb-0">{{ $stat->keterangan }}</p>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                    </div>
                    <a class="btn btn-primary text-uppercase px-5 py-3" href="">{{ $setting->text_button }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">{{ $setting->judul_team }}</h1>
                <h1 class="mb-5">{{ $setting->subjudul_team }}</h1>
            </div>
@endif
@if ($teams->count())


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
 @endif
@endsection

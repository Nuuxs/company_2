@extends('layout.bingkai')

@section('title', 'Price')

@section('content')


    <!-- Hero Start -->
    @if ($settingprices)


    <div class="container-fluid bg-light page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">{{ $settingprices->nama_halaman }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $settingprices->nama_halaman }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Pricing Start -->
    <div class="container-fluid price px-0">
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
            @endif

@if ($daftarprices->count())


            <div class="col-md-6">
                <div class="h-100 bg-dark p-5">

@foreach ($daftarprices as $item )


                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid flex-shrink-0" src="{{ asset($item->gambar) }}" alt="No Image" style="width: 100px;">
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
@endif
@endsection

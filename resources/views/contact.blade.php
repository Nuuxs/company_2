@extends('layout.bingkai')

@section('title', 'Contact')

@section('content')

    @if ($settingcontacts)
        <!-- Hero Start -->
        <div class="container-fluid bg-light page-header py-5 mb-5">
            <div class="container text-center py-5">
                <h1 class="display-1 animated slideInLeft">{{ $settingcontacts->judul }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $settingcontacts->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="font-dancing-script text-primary">{{ $settingcontacts->judul}}</h1>
                    <h1 class="mb-5">{{ $settingcontacts->subjudul}}</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <p class="text-center mb-4">{{ $settingcontacts->deskripsi }} <br> <a href="{{ $settingcontacts->link }}">{{ $settingcontacts->text_link }}</a></p>
                        <div class="wow fadeIn" data-wow-delay="0.3s">


    @if (session('success'))
        <div id="successMessage" class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                        required>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        required>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"
                        required></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3 ms-0" type="submit">{{ $settingcontacts->text_button }}</button>
            </div>
        </div>
    </form>
 @endif
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

    {{-- script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let successMessage = document.getElementById('successMessage');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.transition = "opacity 0.5s ease";
                    successMessage.style.opacity = "0";
                    setTimeout(() => successMessage.remove(), 500); // hapus element setelah animasi
                }, 3000); // 3 detik sebelum mulai fade out
            }
        });
    </script>

@endsection

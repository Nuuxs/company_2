<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'awokawok')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets1/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:wght@500&family=Work+Sans&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets1/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/assets1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets1/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-light sticky-top p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="index.html" class="navbar-brand bg-primary py-4 px-5 me-0">
                <h1 class="mb-0"><i class="bi bi-scissors"></i>Salone</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ route('price') }}" class="nav-item nav-link">Price</a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="gallery.html" class="dropdown-item">Photo Gallery</a>
                            <a href="blog.html" class="dropdown-item">Beauty Blog</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> --}}
                    <a href="{{ route('contact') }}" class="nav-item nav-link active">Contact</a>
                </div>
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm-square me-3" href="{{ $footer->link_fb }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-sm-square me-3" href="{{ $footer->link_ig }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary btn-sm-square" href="{{ $footer->link_in }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



@yield('content')



    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 mt-5 wow fadeIn"
        data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="display-5 text-primary mb-0"><i class="bi bi-scissors"></i>{{ $footer->nama_company }}</h1>
                    </a>
                    <p>{{ $footer->deskripsi }}</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>{{ $footer->alamat }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-2"></i>{{ $footer->no_hp }}</p>
                    <p><i class="fa fa-envelope me-2"></i>{{ $footer->email }}</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-sm-square btn-primary me-3" href="{{ $footer->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary me-3" href="{{ $footer->link_fb }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary me-3" href="{{ $footer->link_in }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary me-3" href="{{ $footer->link_ig }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <h5 class="text-primary mb-4">Quick Links</h5>
                            <a class="btn btn-link" href="{{ route(name: 'about') }}">{{ $setting->judul }}</a>
                            <a class="btn btn-link" href="{{ route('contact') }}">{{ $settingcontact->judul }}</a>
                            <a class="btn btn-link" href="{{ route('service') }}">{{ $settingservice->judul }}</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-primary mb-4">Popular Links</h5>
                            <a class="btn btn-link" href="{{ route('about') }}">{{ $setting->judul }}</a>
                            <a class="btn btn-link" href="{{ route('contact') }}">{{ $settingcontact->judul }}</a>
                            <a class="btn btn-link" href="{{ route('service') }}">{{ $settingservice->judul }}</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="text-primary mb-4">Newsletter</h5>
                            <div class="position-relative w-100 mb-2">
<form action="">
                                <input  class="form-control bg-secondary text-white border-0 w-100 ps-4 pe-5 " type="text"
                                    placeholder="Enter Your Email" style="height: 60px;" >
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                        class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                            </form>
                            <p class="mb-0">Diam sed sed dolor stet amet eirmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white border-top border-secondary py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">{{ $footer->nama_company }}</a>, {{ $footer->teks_copyright }}.
                </div>
                <div class="col-md-6 text-center text-md-end">

                    @php
                        use Illuminate\Support\Facades\DB;
                        use Carbon\Carbon;

                        // Ambil waktu update terakhir dari semua tabel utama

                        $tables = ['settings', 'stats', 'teams', 'settingservices', 'exploreservices',
                                    'testimonials', 'settingprices', 'daftarprices',
                                    'settingblogs', 'informasiblogs', 'settingcontacts',
                                    'settinghomes', 'sliderfotos', 'galeris', 'footers'
                                ];

                        $lastUpdate = null;

                        foreach ($tables as $table) {
                            $updatedAt = DB::table($table)->max('updated_at');
                            if ($updatedAt && (!$lastUpdate || $updatedAt > $lastUpdate)) {
                                $lastUpdate = $updatedAt;
                            }
                        }
                    @endphp

                    @if ($lastUpdate)
                        <p>
                            Last updated: {{ Carbon::parse($lastUpdate)->translatedFormat('d F Y') }}
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>



    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets1/lib/wow/wow.min.js"></script>
    <script src="/assets1/lib/easing/easing.min.js"></script>
    <script src="/assets1/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets1/lib/counterup/counterup.min.js"></script>
    <script src="/assets1/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/assets1/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets1/js/main.js"></script>
</body>

</html>

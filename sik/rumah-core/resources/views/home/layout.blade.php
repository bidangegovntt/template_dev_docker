<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lopo Inovasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link href="{{ asset('home/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('home/img/apple-touch-icon.png') }}" rel="apple-touch-icon" type="image/png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i|Noto+Sans:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    {{-- old butterfly --}}
    {{-- <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('home/vendor/venobox/venobox.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('home/vendor/icofont/icofont.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('home/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('home/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    @yield('plugin-css')
    @livewireStyles
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container-fluid d-flex justify-content-between">

            <div class="logo align-self-center">
                <a href="{{ url('') }}" class="logo mr-auto">
                    <img src="{{ asset('home/img/logo_ri.png') }}" alt="" class="img-fluid">
                </a>
                <!-- Uncomment below if you prefer to use text as a logo -->
                <!-- <h1 class="logo mr-auto"><a href="{{ url('') }}">Butterfly</a></h1> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('') }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Profil Lopo Inovasi</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('training-show', 2)}}">Sejarah</a></li>
                            <li><a href="{{ route('training-show', 3) }}">Tim Lopo Inovasi</a></li>
                            <li><a href="{{ route('training-show', 4) }}">Survey Pengguna</a></li>
                        </ul>
{{--
                        <ul>
                            <li><a href="{{ route('training-list') }}">Artikel</a></li>
                            <li><a href="{{ route('kunjungan-lapangan') }}">Kunjungan Lapangan</a></li>
                        </ul>
--}}
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Direktori</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('lumbung-inovasi-list') }}">Sinovik</a></li>
                            <li><a href="{{ route('lumbung-inovasi-list') }}">IGA</a></li>
                            <li><a href="{{ route('lumbung-inovasi-list') }}">KOIN YANLIK</a></li>
                        </ul>
{{--
                        <ul>
                            <li><a href="{{ route('lumbung-inovasi-list') }}">Lumbung</a></li>
                            <li><a href="{{ route('forum-replikasi-list') }}">Forum Replikasi</a></li>
                            <li><a href="{{ route('lumbung-inovasi-map') }}">Peta Inovasi</a></li>
                        </ul>
--}}
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Kompetisi</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('proposal') }}">KOIN YANLIK</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Replikasi & Inkubasi</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('hotline-inovasi-tim-inkubator') }}">Tim Inkubator</a></li>
                            <li><a href="{{ route('hotline-inovasi-klinik') }}">Klinik Inovasi</a></li>
                        </ul>
{{--
                        <ul>
                            <li><a href="{{ url('klinik-inovasi') }}">Klinik</a></li>
                            <li><a href="{{ url('hotline-inovasi') }}">Hotline</a></li>
                            <li><a href="{{ route('analisis-inovasi') }}">Analisis</a></li>
                        </ul>
--}}
                    </li>
                    <li class="dropdown">
						<li><a href="{{ route('lumbung-inovasi-map') }}">Sebaran</a></li>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Pustaka</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="">Berita Kegiatan</a></li>
                            <li><a href="">Pengumuman</a></li>
                            <li><a href="">Regulasi</a></li>
                            <li><a href="">Referensi</a></li>
                        </ul>
                    </li>
                    @guest
                        <li>
                            <a href="{{ route('home-login', ['pergi-ke' => url()->current()]) }}"
                                class="btn btn-orange btn-sm text-white"><i class="fa fa-sign-in-alt me-2"></i> Login</a>
                        </li>
                    @endguest
                    @auth
                        <li>
                            <a href="{{ route('notification') }}">
                                <span class="position-relative">
                                    {{-- <span
                                        class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1">
                                        <span class="visually-hidden">unread messages</span>
                                    </span> --}}
                                    @livewire('home.notification-bell')
                                    <img src="{{ asset('home/img/notification.svg') }}" class="rounded-circle"
                                        style="width: 30px"></span>
                                {{-- <i class="bi bi-chevron-down"></i> --}}
                            </a>
                            {{-- <ul>
                                <li><a href="{{ route('hotline-inovasi.my-messages') }}">Pesan <span class="badge rounded-pill bg-danger">2</span></a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)">
                                @php
                                    $profpic = asset('home/img/people-no-face.svg');

                                    if (auth()->user()->profile_photo_path != '') {
                                        $profpic = asset('storage/' . auth()->user()->profile_photo_path);
                                    }
                                @endphp
                                <span><img src="{{ $profpic }}" class="rounded-circle" style="width: 34px"></span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul>
                                <li class="text-muted px-3">{{ auth()->user()->name }}</li>
                                <li><a href="{{ route('my-profile') }}">Profilku</a></li>
                                <hr class="mx-3 my-0">

                                @if (Auth::user()->isSuperAdmin() || Auth::user()->hasRole('admin inovasi'))
                                <li>
                                    <a href={{ route('admin.home') }}>Beranda Admin</a>
                                </li>
                                @endif

                                <li><a href="{{ url('home/logout') }}">
                                        <span>
                                            <i class="fa fa-sign-out-alt"></i> Logout
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    @yield('hero')

    <main id="main"
        style="background-size: 50%; background-attachment: fixed; background-image: url('{{ asset('home/img/background_web.png') }}'); background-repeat: repeat; min-height: 100vh;"
        class="">

        <!-- ======= Content Section ======= -->

        @yield('content')

        <!-- End Content Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="bg-dark text-light text-center">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Rumah Inovasi</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="{{ url('') }}">Lopo Inovasi</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#top" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('home/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    {{-- <script src="{{ asset('home/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="{{ asset('home/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/waypoints/noframework.waypoints.js') }}"></script>


    {{-- old butterfly --}}
    {{-- <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/jquery.easing/jquery.easing.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/php-email-form/validate.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/venobox/venobox.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/waypoints/jquery.waypoints.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/counterup/counterup.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('home/vendor/owl.carousel/owl.carousel.min.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('home/js/main.js') }}"></script>

    @yield('plugin-js')

    @livewireScripts

</body>

</html>

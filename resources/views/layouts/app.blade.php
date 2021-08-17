<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Campeonatos de Xadrez - @yield('title-page')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css', true) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css', true) }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/calendar.js', true) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts-head')
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css', true) }}" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-evenly">

        <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">INSTA PUZZLE<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo me-auto me-lg-0"><img src="{{ asset('assets/img/logo.png', true) }}" alt=""
                                                               class="img-fluid"></a>

           <!-- <div class="container d-flex align-items-center justify-content-lg-end">
                <div class="btn-group btn-group-lg">
                    <div class="col-lg-7 col-sm-6">
                        <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <a href="{{ route('register') }}" class="get-started-btn scrollto">Register</a>
                    </div>
                </div>
            </div>

            <div class="container d-flex align-items-center justify-content-lg-end">
                <form method="post" action="{{ route('logout') }}">

                    <button type="submit" class="get-started-btn scrollto">Logout</button>
                </form>

            </div>-->
    </div>
</header>

@yield('content')


@yield('modals')

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Camp.Chess<span>.</span></h3>
                        <div class="social-links mt-3">
                            <a href="https://github.com/joaopaulons/chesstournaments.git" class="github" target="_blank"><i
                                    class="bx bxl-github"></i></a>
                            <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/insta_puzzle_games/" class="instagram" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCMc4TO6a3hGbNsRxdUGTIjw" class="youtube"
                               target="_blank"><i class="bx bxl-youtube"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=+4407960360839&text=Ola%2C%20poderia%20me%20informar%20como%20funciona%20o%20Insta%20Puzzle%3F"
                               target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>-->
                        </div>
                    </div>
                </div>


                <!--<div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nossa Newsletter</h4>
                    <p>Inscreva seu e-mail aqui para não perder nenhum campeonato!</p>
                    <form action="{{ route('newsletter') }}" method="post">
                        @csrf
                        <input type="email" required name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>-->

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Sistema desenvolvido por Joao Santos</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js', true) }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js', true) }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js', true) }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js', true) }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js', true) }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter.js', true) }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js', true) }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js', true) }}"></script>
<script src="{{ asset('js/sweetalert2.all.min.js', true) }}"></script>
@yield('scripts-footer')

</body>

</html>


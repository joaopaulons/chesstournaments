<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Insta Puzzle - Cadastro</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//code-sa1.jivosite.com/widget/K3z4x9Nm0O" async></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2839851750416942"
            crossorigin="anonymous"></script>
    <!-- =======================================================
    * Template Name: Gp - v4.3.0
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-evenly">

        <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">INSTA PUZZLE<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                                                               class="img-fluid"></a>


        <div class="footer-info">
            <div class="social-links mt-3">
                <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->
                <a href="https://api.whatsapp.com/send?phone=+4407960360839&text=Ola%2C%20poderia%20me%20informar%20como%20funciona%20o%20Insta%20Puzzle%3F"
                   target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i> Clique aqui! E tire sua duvida via WhatsApp</a>
            </div>
        </div>

        <!--<nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Como funciona?</a></li>
                <li><a class="nav-link scrollto" href="#services">Premios</a></li>
                <li><a class="nav-link scrollto " href="#portfolio"></a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>-->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">

            <div class="col-xl-6 col-lg-8">
                <h1>Esta é a sua chance de ganhar prêmios!</h1>
                <h2>Cadastre abaixo para começar a concorrer!</h2>
            </div>
        </div>
        <br/>
        <br/>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">

            <div class="row">
                <div class="col-md-12">
                    <div id="calendar" class=""></div>
                </div>
            </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3 form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" id="name" placeholder="Nome completo"
                               required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" name="email" id="email"
                               placeholder="Seu email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control phone" name="phone" value="{{ old('phone') }}" id="phone"
                               placeholder="Telefone para contato" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control instagram" name="instagram"
                               value="{{ old('instagram') }}" id="instagram"
                               placeholder="Insira seu instagram" required>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-3 form-group">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror" id="password"
                               placeholder="Insira uma senha"
                               required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                               placeholder="Confirme a senha" autocomplete="new-password" required>
                    </div>
                </div>
                <br/>
                <br/>+
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Registrar</button>
                </div>
            </form>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <img src="{{ asset('assets/img/icone-sorteios.png') }}" alt="" class="img-fluid">
                    <!--<i class="ri-store-line"></i>-->
                    <h3><a href="">Sorteios</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <img src="{{ asset('assets/img/icone-enigma.png') }}" alt="" class="img-fluid">
                    <!--<i class="ri-bar-chart-box-line"></i>-->
                    <h3><a href="">Enigmas</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <img src="{{ asset('assets/img/logo-competicao.png') }}" alt="" class="img-fluid">
                    <!-- <i class="ri-calendar-todo-line"></i> -->
                    <h3><a href="">Desafios</a></h3>
                </div>
            </div>

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <img src="{{ asset('assets/img/icone-found.png') }}" alt="" class="img-fluid">
                    <!--<i class="ri-database-2-line"></i> -->
                    <h3><a href="">Achou ganhou</a></h3>
                </div>
            </div>
        </div>

    </div>

</section><!-- End Hero -->


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>InstaPuzzles<span>.</span></h3>
                        <div class="social-links mt-3">
                            <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->
                            <a href="https://www.instagram.com/insta_puzzle_games/" class="instagram" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCMc4TO6a3hGbNsRxdUGTIjw" class="youtube"
                               target="_blank"><i class="bx bxl-youtube"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=+4407960360839&text=Ola%2C%20poderia%20me%20informar%20como%20funciona%20o%20Insta%20Puzzle%3F"
                               target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nossa Newsletter</h4>
                    <p>Inscreva seu e-mail aqui para não perder nenhum premio!</p>
                    <form action="{{ route('newsletter') }}" method="post">
                        @csrf
                        <input type="email" required name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>InstaPuzzle</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('.phone').mask('(00) 0 0000-0000')
        $("#calendar").evoCalendar({
            theme: "Orange Coral",
            eventDisplayDefault: true,
            eventListToggler: true,
            language: 'pt',
            calendarEvents: [
                {
                    id: 'bHay68s', // Event's ID (required)
                    name: "New Year", // Event name (required)
                    description: "Teste de descricao",
                    date: "August/3/2021", // Event date (required)
                    type: "holiday", // Event type (required)
                    onClick: function(){

                    },
                    everyYear: true, // Same event every year (optional)
                    color: "#63d867" // Event custom color (optional)
                },
                {
                    name: "Vacation Leave",
                    badge: "02/13 - 02/15", // Event badge (optional)
                    date: ["February/13/2020", "February/15/2020"], // Date range
                    description: "Vacation leave for 3 days.", // Event description (optional)
                    type: "event",
                    color: "#63d867" // Event custom color (optional)
                }
            ]
        });


        @if(\Session::has('status') && \Session::get('status') == 200)
        Swal.fire({
            title: 'Sucesso!',
            text: 'Você foi Registrado(a) com sucesso! Esta é 7ª imagem da sequência correta!',
            imageUrl: '{{ asset('assets/img/mosaicos/up.gif') }}',
            imageWidth: 500,
            imageHeight: 500,
            imageAlt: 'Dica do desafio',
        })
        @endif

        @if(isset($status) && $status == 200)
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{$msg}}',
            showConfirmButton: false,
            timer: 2000
        })
        @endif

    });
</script>

</body>

</html>

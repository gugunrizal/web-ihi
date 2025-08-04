<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Institut Hijau Indonesia</title>
    <meta name="description" content="Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.">
    <meta name="description" content="Web dan Berita Institut Hijau Indonesia">
    <meta property="og:title" content="Institut Hijau Indonesia | Social and Ecological Justice">
    <meta property="og:url" content="https://instituthijauindonesia.or.id">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Institut Hijau Indonesia">


    <!-- Favicons -->
    <link href="{{asset('img/logo-ihi.png')}}" rel="icon">
    <link href="{{asset('img/logo-ihi.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <style>
        /* .bg {
            background: url('{{asset("img/bg.JPG")}}');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        } */

        .backgroundAwal {
            height: 100vh;
            /* background-image: url('{{asset("img/bg.JPG")}}'); */
            background-size: 120% 120%;
            background-position: center center;
            animation: shrink 5s infinite alternate;
            background-repeat: no-repeat;
        }

        @keyframes shrink {
            0% {
                background-size: 120% 120%;
            }

            100% {
                background-size: 100% 100%;
            }
        }

        /* .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        } */

        .carousel-caption {
            bottom: 40%;
            left: 5%;
            right: 5%;
            text-align: center;
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            /* background: rgba(0, 0, 0, 0.3); */
            /* semi-transparan biar teks lebih terbaca */
            padding: 10px;
            border-radius: 10px;
        }

        .carousel-caption h1,
        .carousel-caption p {
            color: #fff;
            font-size: clamp(14px, 3vw, 28px);
            /* Responsive font size */
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                bottom: 10%;
                padding: 8px;
            }


            .carousel-caption h1 {
                font-size: 25px;
            }

            .carousel-caption p {
                font-size: 13px;
            }
        }
    </style>

</head>

<body class="index-page bg">

    @include('template.header')

    @yield('content')

    @include('template.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
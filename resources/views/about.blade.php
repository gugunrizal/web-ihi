<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tentang IHI</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top bg-success">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{asset('img/logo-ihi.png')}}" alt="">
                <!-- <h1 class="sitename">Invent</h1><span>.</span> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}" class="">Beranda</a></li>
                    <li><a href="{{route('home')}}" class="">Tentang Kami</a></li>
                    <li><a href="{{route('home')}}" class="">Program Kami</a></li>
                    <li><a href="{{route('home')}}" class="active">Tim</a></li>
                    <li><a href="{{route('home')}}" class="">Portfolio</a></li>
                    <li><a href="{{route('home')}}" class="">Blog</a></li>
                    <li><a href="{{route('home')}}" class="">Kontak Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- <a class="btn-getstarted" href="{{route('login')}}">Login</a> -->

        </div>
    </header>

    <main class="main team section light-background">
        <section class="berita">
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Institut Hijau Indonesia</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('img/portfolio/ihi3.JPG')}}" alt="" class="img-fluid rounded">
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <p class="h5">
                            Institut hijau Indonesia didirikan pada tahun 2008, lembaga ini sengaja dihadirkan untuk menguatkan narasi-narasi tentang keadilan sosial dan keadilan lingkungan hidup. Kemudian, memfasilitasi lahirnya atau tumbuhnya pemimpin-pemimpin yang memiliki keadilan sosial dan ekologi di beragam wilayah dan sektor, serta, mengembangkan strategi kampanye popular agar bisa menjangkau publik luas yang punya perhatian terhadap isu lingkungan hidup
                            <br> <br>
                            Institut Hijau Indonesia secara sungguh-sungguh ingin membangun peradaban hijau Indonesia. Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.
                            <br> <br>
                            Institut Hijau Indonesia memiliki beberapa program, diantaranya Green Leadership Indonesia, Green Youth Movement, Green Public Interest Lawyer, Laboratorium Keadilan Sosial dan Ekologis, Jurnal Peradaban Hijau, dan Civic Education.
                        </p>
                    </div>

                </div>

            </div>
        </section>
    </main>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Institut Hijau Indonesia</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('img/logo-ihi.png')}}" rel="icon">
    <link href="{{asset('img/logo-ihi.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <header id="header" class="header d-flex align-items-center fixed-top bg-ihi">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{asset('img/logo-ihi.png')}}" alt="">
                <!-- <h1 class="sitename">Invent</h1><span>.</span> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}#hero" class="">Beranda</a></li>
                    <li class="dropdown"><a href="{{route('home')}}#about" class=""><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{route('tampilAbout')}}">Sejarah</a></li>
                            <li><a href="{{route('tampilTim')}}">Pengurus Inti</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{route('home')}}#how-we-work" class=""><span>Program Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{route('tampilGreenLeader')}}">Green Leadership Indonesia</a></li>
                            <li><a href="#">Green Youth Movement</a></li>
                            <li><a href="#">Green Public Interest Lawyer</a></li>
                            <li><a href="#">Laboratorium Keadilan Sosial dan Ekologis</a></li>
                            <li><a href="#">Jurnal Peradaban Hijau</a></li>
                            <li><a href="{{route('tampilCivic')}}">Civic Education</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="{{route('tampilAllBerita')}}" class="">Blog</a></li> -->

                    <li><a href="{{route('home')}}#team" class="">Tim</a></li>
                    <li><a href="{{route('home')}}#portfolio" class="">Galeri</a></li>
                    <li><a href="{{route('home')}}#blog" class="active">Blog</a></li>
                    <li><a href="{{route('home')}}#contact" class="">Kontak Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- <a class="btn-getstarted" href="{{route('login')}}">Login</a> -->

        </div>
    </header>

    <main class="main">
        <section class="berita">
            <div class="container">
                <!-- Page Title -->
                <div class="page-title">
                    <nav class="breadcrumbs">
                        <div class="container">
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li class="current">Detail Berita</li>
                            </ol>
                        </div>
                    </nav>
                </div>
                <!-- End Page Title -->

                <!-- Portfolio Details Section -->
                <section id="portfolio-details" class="portfolio-details section">

                    <div class="container" data-aos="fade-up">

                        @foreach ($berita as $b)
                        <img src="{{asset('storage/'.$b->gambar_berita)}}" alt="" class="img-fluid">

                        <div class="row justify-content-between gy-4 mt-4">

                            <div class="col-lg-8" data-aos="fade-up">
                                <div class="portfolio-description">
                                    <h2>{{$b->judul}}</h2>
                                    <h6>Ditulis oleh {{$b->penulis}} | {{$b->tanggal_rilis}}</h6>
                                    <hr>
                                    <p>
                                    <div style="text-align: justify;"><?= htmlspecialchars_decode($b->isi_berita); ?></div>
                                    </p>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="portfolio-info">
                                    <h3>Berita Lainnya</h3>
                                    <ul>
                                        @foreach ($beritaFull as $bb)
                                        <li>
                                            <a href="{{route('tampilBeritaById', $bb->slug)}}">
                                                <h6>{{$bb->judul}} </h6> | <strong> {{$bb->tanggal_rilis}} </strong>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>
                <!-- /Portfolio Details Section -->
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
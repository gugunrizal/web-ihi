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
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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
                <h2>Tim</h2>
                <p>Pimpinan Tim Institut Hijau Indonesia</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Chalid Muhammad</h4>
                                <span class="position">Ketua</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Selamet Daroini</h4>
                                <span class="position">Direktur</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Akhmad Supiani</h4>
                                <span class="position">Manager Finance</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Zen Smith</h4>
                                <span class="position">Safe Guard</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 50px;">
                <p>Project Officer Institut Hijau Indonesia</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Anonym</h4>
                                <span class="position">Project Officer finance</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Anonym</h4>
                                <span class="position">Projet Officer Media</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Anonym</h4>
                                <span class="position">Projet Officer Administrasi</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="img/santri.png" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <p>Institut Hijau Indonesia</p>
                                    <div class="team-social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Anonym</h4>
                                <span class="position">Project Officer Program</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

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
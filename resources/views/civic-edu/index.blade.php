<!DOCTYPE html>
<html lang="en">

<head>

    <title>Civic Education</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link href="{{asset('img/civic-edu/logo-civic-white.png')}}" rel="icon">
    <link href="{{asset('img/civic-edu/logo-civic-white.png')}}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/templatemo-digital-trend.css')}}">

</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('tampilCivic')}}">
                <i class="fa fa-line-chart"></i>
                Civic Education
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link contact">Kembali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px; font-weight: bold;">
                            Welcome to Civic Education
                        </h1>
                        <p class="text-white" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px;">
                            Saatnya menjadi masyarakat yang lebih Cerdas!
                        </p>
                        <a href="#" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px; font-weight: bold;">
                            Login LMS
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                        <img src="{{asset('img/civic-edu/hero-civic-main.png')}}" class="img-fluid" alt="working girl">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">
                            Tentang <strong>Civic Education</strong>
                        </h2>

                        <p class="mb-0" data-aos="fade-up">
                            Program Edukasi dari Institut Hijau Indonesia untuk menumbuhkan <strong>kesadaran demokrasi, sosial, dan lingkungan.</strong>
                            <br><br>
                            Menggunakan pendekatan inklusif dan berbasis pengalaman, Civic Education mendorong <strong>generasi muda membangun negara yang adil secara sosial dan ekologis.</strong>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto col-md-10 col-12 mt-5">
                    <h2 class="mb-5 text-center" data-aos="fade-up">
                        Prepare Yourself
                        <br>
                        <strong>for Our Speaker</strong>
                    </h2>
                    <div class="about-image mb-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('img/civic-edu/narsum-civic.jpg')}}" class="img-fluid rounded" alt="office">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PROJECT -->
    <!-- <section class="project section-padding" id="project">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                        Please take a look through our
                        <strong>featured Digital Trends</strong>
                    </h2>

                    <div class="owl-carousel owl-theme" id="project-slide">
                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{asset('images/project/project-image01.jpg')}}" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Marketing</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Sweet Go Agency</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="{{asset('images/project/project-image02.jpg')}}" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Website</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Smart Ladies</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="{{asset('images/project/project-image03.jpg')}}" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Branding</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Shoes factory</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="{{asset('images/project/project-image04.jpg')}}" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Social Media</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Race Bicycle</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="{{asset('images/project/project-image05.jpg')}}" class="img-fluid" alt="project image">

                            <div class="project-info">
                                <small>Video</small>

                                <h3>
                                    <a href="project-detail.html">
                                        <span>Ultimate HealthCare</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


    <!-- TESTIMONIAL -->
    <!-- <section class="testimonial section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <div class="contact-image" data-aos="fade-up">

                        <img src="{{asset('images/female-avatar.png')}}" class="img-fluid" alt="website">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-12">
                    <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                    <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small>
                    </p>
                </div>

            </div>
        </div>
    </section> -->


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Institut Hijau Indonesia</h1>
                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="100"><strong>Civic Education</strong></h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        <!-- +99 080 070 4224 -->
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            instituthijauindonesiahi@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Kantor Kami</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        Gedung Manggala Wanabakti Blok IV lantai 7, Wing C
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2025 by Institut Hijau Indonesia
                        <br>
                        <!-- <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a> -->
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                    <ul class="footer-link">
                        <li><a href="#">Stories</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-dribbble"></a></li>
                        <li><a href="#" class="fa fa-behance"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/boostrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/custom2.js')}}"></script>

</body>

</html>
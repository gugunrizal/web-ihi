<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Berita | Green Leadership Indonesia</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @foreach ($berita as $b)
    <meta property="og:title" content="{{$b->judul}}">
    <meta property="og:image" content="{{asset('img/gambar_berita/'.$b->gambar_berita)}}">
    @endforeach

    <!-- Favicons -->
    <link href="{{asset('img/logo-program/Logo-GLI.png')}}" rel="icon">
    <link href="{{asset('img/logo-program/Logo-GLI.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('css/main2.css')}}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #088a08;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{route('tampilGreenLeader')}}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">Green Leadership Indonesia</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('tampilGreenLeader')}}">Home</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#about">About</a></li>
                    <li><a href="{{route('tampilTimGLI')}}">Team</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#speaker">Speaker</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#recent-blog-postst" class="active">Blog</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#contact">Contact</a></li>
                    <a class="btn-getstarted" href="{{route('home')}}">Kembali</a>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="padding-top: 100px;">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{route('tampilGreenLeader')}}">Home</a></li>
                        <li class="current">Blog Details</li>
                    </ol>
                </nav>
                <h1>Blog Details</h1>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <!--<div class="card">-->
                    <section id="blog-details" class="blog-details section">
                        <div class="container widget-item" data-aos="fade-up">

                            @foreach ($berita as $b)

                            <article class="article">

                                <div class="hero-img" data-aos="zoom-in">
                                    <img src="{{asset('img/gambar_berita/'.$b->gambar_berita)}}" alt="Featured blog image" class="img-fluid" loading="lazy">
                                    <div class="meta-overlay">
                                        <div class="meta-categories">
                                            <strong class="category">{{$b->kategori}}</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                                    <div class="content-header">
                                        <h1 class="title text-black">{{$b->judul}}</h1>

                                        <div class="author-info">
                                            <div class="author-details">
                                                <img src="{{asset('img/logo-program/Logo-GLI.png')}}" alt="Author" class="author-img">
                                                <div class="info">
                                                    <h4 class="text-black">{{$b->penulis}}</h4>
                                                    <!-- <span class="role">Senior Web Developer</span> -->
                                                </div>
                                            </div>
                                            <div class="post-meta">
                                                <span class="date"><i class="bi bi-calendar3"></i> {{$b->tanggal_rilis}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <?= htmlspecialchars_decode($b->isi_berita); ?>
                                    </div>

                                    <!-- <div class="meta-bottom">
                                            <div class="tags-section">
                                                <h4>Related Topics</h4>
                                                <div class="tags">
                                                    <a href="#" class="tag">Web Development</a>
                                                    <a href="#" class="tag">Performance</a>
                                                    <a href="#" class="tag">Best Practices</a>
                                                    <a href="#" class="tag">Trends</a>
                                                    <a href="#" class="tag">2025</a>
                                                </div>
                                            </div>
    
                                            <div class="share-section">
                                                <h4>Share Article</h4>
                                                <div class="social-links">
                                                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                                    <a href="#" class="copy-link" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
                                                </div>
                                            </div>
                                        </div> -->
                                </div>

                            </article>
                            @endforeach

                        </div>
                    </section>
                    <!--</div>-->
                    <!-- /Blog Details Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title text-black">Recent Posts</h3>
                            @foreach ($beritaFull as $bb)

                            <div class="post-item">
                                <img src="{{asset('/storage/'.$b->gambar_berita) }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{route('tampilBeritaGLI', $bb->slug)}}">{{$bb->judul}}</a></h4>
                                    <time datetime="2020-01-01">{{$bb->tanggal_rilis}}</time>
                                </div>
                            </div>
                            @endforeach
                            <!-- End recent post item-->

                        </div>
                        <!--/Recent Posts Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-6 footer-about">
                    <a href="{{route('tampilCivic')}}" class="d-flex align-items-center">
                        <span class="sitename" style="color: #088a08;">Green Leadership Indonesia</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Palapa XVII No.3 11, RT.11/RW.5, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 852-4260-0884 (Fachruddin Dokumalamo)</span></p>
                        <p><strong>Email:</strong> <span>instituthijauindonesiaIHI@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Follow us for more information</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <a href="{{route('home')}}" class="px-1 sitename"><strong>Institut Hijau Indonesia</strong></a> <span>All Rights Reserved</span></p>
            <div class="credits">
                Green Leadership Indonesia
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Civic Education</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('img/logo-program/logo-civic-white.png')}}" rel="icon">
  <link href="{{asset('img/logo-program/logo-civic-white.png')}}" rel="apple-touch-icon">

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

  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #950c0c;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{route('tampilCivic')}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Civic Education</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speaker">Speaker</a></li>
          <li><a href="#recent-blog-postst">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
      </nav>

      <a class="btn-getstarted" href="{{route('home')}}">Kembali</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="background-color: #950c0c;">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="text-white">Civic Education</h1>
            <p class="text-white">Saatnya menjadi masyarakat yang lebih Cerdas!</p>
            <div class="d-flex">
              <a href="https://lmscivic.instituthijauindonesia.or.id/" class="btn-get-started">Login LMS</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('img/logo-program/logo-civic-white.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              <strong>Institut Hijau Indonesia</strong> secara sungguh-sungguh ingin membangun peradaban hijau Indonesia. Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.

            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>
              Program Edukasi dari Institut Hijau Indonesia untuk menumbuhkan kesadaran demokrasi, sosial, dan lingkungan.
              Menggunakan pendekatan inklusif dan berbasis pengalaman, <strong>Civic Education</strong> mendorong generasi muda membangun negara yang adil secara sosial dan ekologis.
            </p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
          </div>

        </div>

      </div>

    </section>
    <!-- /About Section -->

    <!-- Services Section -->
    <section id="speaker" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>OUR SPEAKER</h2>
        <p>Prepare Yourself for Civic Education</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/1.png')}}" class="img-fluid rounded" alt="Dr. Qurnia Indah Permata Sari">
              <p class="text-center mt-2 mt-2">Dr. Qurnia Indah Permata Sari</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/2.png')}}" class="img-fluid rounded" alt="Ahmad Fauzi (Ray Rangkuti)">
              <p class="text-center mt-2">Ahmad Fauzi (Ray Rangkuti)</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/3.png')}}" class="img-fluid rounded" alt="Dani Wahyu Munggoro">
              <p class="text-center mt-2">Dani Wahyu Munggoro</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/4.png')}}" class="img-fluid rounded" alt="Zainal Arifin Mochtar, S.H., LL.M.">
              <p class="text-center mt-2">Zainal Arifin Mochtar, S.H., LL.M.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/5.png')}}" class="img-fluid rounded" alt="Prof. Dr. H. Jimly Asshiddiqie, S.H., M.H.">
              <p class="text-center mt-2">Prof. Dr. H. Jimly Asshiddiqie, S.H., M.H.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/6.png')}}" class="img-fluid rounded" alt="Bivitri Susanti, S.H., LL.M.">
              <p class="text-center mt-2">Bivitri Susanti, S.H., LL.M.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/7.png')}}" class="img-fluid rounded" alt="Sudirman Said, S.Ak., MBA.">
              <p class="text-center mt-2">Sudirman Said, S.Ak., MBA.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/8.png')}}" class="img-fluid rounded" alt="Prof. Dr. Bambang Shergi Laksmono, M.Sc.">
              <p class="text-center mt-2">Prof. Dr. Bambang Shergi L, M.Sc.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/9.png')}}" class="img-fluid rounded" alt="H. Anies Rashid Baswedan, S.E., M.PP., Ph.D.">
              <p class="text-center mt-2">H. Anies R. Baswedan, S.E., M.PP., Ph.D.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/10.png')}}" class="img-fluid rounded" alt="Dr. Drs. Imam Budidarmawan Prasojo, M.A., Ph.D.">
              <p class="text-center mt-2">Dr. Drs. Imam Budidarmawan P, M.A., Ph.D.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/11.png')}}" class="img-fluid rounded" alt="Prof. Dr. Djohermansyah Djohan, M.A.">
              <p class="text-center mt-2">Prof. Dr. Djohermansyah Djohan, M.A.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/12.png')}}" class="img-fluid rounded" alt="Eberta Kawima">
              <p class="text-center mt-2">Eberta Kawima</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/13.png')}}" class="img-fluid rounded" alt="Titi Anggraini, S.H., M.H.">
              <p class="text-center mt-2">Titi Anggraini, S.H., M.H.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/14.png')}}" class="img-fluid rounded" alt="Dr. Refly Harun, S.H., M.H., LL.M.">
              <p class="text-center mt-2">Dr. Refly Harun, S.H., M.H., LL.M.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/15.png')}}" class="img-fluid rounded" alt="Dr. Revrisond Baswir, M.B.A., Ak., CA">
              <p class="text-center mt-2">Dr. Revrisond Baswir, M.B.A., Ak., CA</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/16.png')}}" class="img-fluid rounded" alt="Prof. Dr. R. Siti Zuhro, MA.">
              <p class="text-center mt-2">Prof. Dr. R. Siti Zuhro, MA.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/17.png')}}" class="img-fluid rounded" alt="Muhammad Isnur, S.H., M.H.">
              <p class="text-center mt-2">Muhammad Isnur, S.H., M.H.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/18.png')}}" class="img-fluid rounded" alt="M. Ridha Saleh">
              <p class="text-center mt-2">M. Ridha Saleh</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/19.png')}}" class="img-fluid rounded" alt="Ahmad Arif">
              <p class="text-center mt-2">Ahmad Arif</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/20.png')}}" class="img-fluid rounded" alt="Chalid Muhammad">
              <p class="text-center mt-2">Chalid Muhammad</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/21.png')}}" class="img-fluid rounded" alt="Hikmat Hardono">
              <p class="text-center mt-2">Hikmat Hardono</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/22.png')}}" class="img-fluid rounded" alt="Noer Fauzi Rachman">
              <p class="text-center mt-2">Noer Fauzi Rachman</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/23.png')}}" class="img-fluid rounded" alt="Suwiryo Ismail">
              <p class="text-center mt-2">Suwiryo Ismail</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/24.png')}}" class="img-fluid rounded" alt="Danang Widoyoko">
              <p class="text-center mt-2">Danang Widoyoko</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/25.png')}}" class="img-fluid rounded" alt="Farah Sofa">
              <p class="text-center mt-2">Farah Sofa</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/26.png')}}" class="img-fluid rounded" alt="Eep Saefulloh Fatah">
              <p class="text-center mt-2">Eep Saefulloh Fatah</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/27.png')}}" class="img-fluid rounded" alt="Dr. Ir. Pramono Anung Wibowo, M.M.">
              <p class="text-center mt-2">Dr. Ir. Pramono Anung Wibowo, M.M.</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- /Services Section -->

    <!-- Recent Blog Postst Section -->
    <section id="recent-blog-postst" class="recent-blog-postst section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Blog Post Civic Education</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5 justify-content-center">
          @foreach ($berita as $b)

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('img/gambar_berita/'.$b->gambar_berita) }}" class="img-fluid" alt="">
                <span class="post-date">{{$b->tanggal_rilis}}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$b->judul}}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{$b->penulis}}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{$b->kategori}}</span>
                  </div>
                </div>

                <hr>

                <a href="{{route('tampilBeritaCivic', $b->slug)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section>
    <!-- /Recent Blog Postst Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Project Officer Civic Education</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Palapa XVII No.3 11, RT.11/RW.5, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 853-7306-7368 (Ichlassul Amal)</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>instituthijauindonesiaIHI@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="info-wrap justify-content-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.812277513979!2d106.83611977591471!3d-6.288388361552235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3007740e4d7%3A0x33d807ebd395bc7d!2sInstitut%20Hijau%20Indonesia!5e0!3m2!1sid!2sid!4v1755396628271!5m2!1sid!2sid" width="690" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-6 footer-about">
          <a href="{{route('tampilCivic')}}" class="d-flex align-items-center">
            <span class="sitename" style="color: #950c0c;">Civic Education</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Palapa XVII No.3 11, RT.11/RW.5, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 853-7306-7368 (Ichlassul Amal)</span></p>
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
        Civic Education
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

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->

<!--<head>-->

<!--    <title>Civic Education</title>-->

<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=Edge">-->
<!--    <meta name="description" content="">-->
<!--    <meta name="keywords" content="">-->
<!--    <meta name="author" content="">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->


<!--    <link href="{{asset('img/civic-edu/logo-civic-white.png')}}" rel="icon">-->
<!--    <link href="{{asset('img/civic-edu/logo-civic-white.png')}}" rel="apple-touch-icon">-->

    <!-- <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/font-awesome.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('vendor/aos/aos.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('vendor/owl/owl.carousel.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('vendor/owl/owl.theme.default.min.css')}}"> -->

    <!-- MAIN CSS -->
    <!-- <link rel="stylesheet" href="{{asset('css/templatemo-digital-trend.css')}}"> -->

<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/bootstrap.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/font-awesome.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/aos.css')}}">-->
<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/owl.carousel.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/owl.theme.default.min.css')}}">-->

    <!-- MAIN CSS -->
<!--    <link rel="stylesheet" href="{{asset('css/templatemo/css/templatemo-digital-trend.css')}}">-->

<!--</head>-->

<!--<body>-->

    <!-- MENU BAR -->
<!--    <nav class="navbar navbar-expand-lg" style="background-color: #950c0c;">-->
<!--        <div class="container">-->
<!--            <a class="navbar-brand" href="{{route('tampilCivic')}}">-->
<!--                Civic Education-->
<!--            </a>-->

<!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"-->
<!--                aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <div class="collapse navbar-collapse" id="navbarNav">-->
<!--                <ul class="navbar-nav ml-auto">-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{route('home')}}" class="nav-link contact">Kembali</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="https://lmscivic.instituthijauindonesia.or.id/" class="nav-link contact">Login LMS</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->


    <!-- HERO -->
<!--    <section class="hero hero-bg d-flex justify-content-center align-items-center" style="background-color: #c20303;">-->
<!--        <div class="container">-->
<!--            <div class="row">-->

<!--                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">-->
<!--                    <div class="hero-text">-->

<!--                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px; font-weight: bold;">-->
<!--                            Welcome to Civic Education-->
<!--                        </h1>-->
<!--                        <p class="text-white" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px;">-->
<!--                            Saatnya menjadi masyarakat yang lebih Cerdas!-->
<!--                        </p>-->
                        <!-- <a href="#" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100" style="margin-left: 50px; font-weight: bold;">
<!--                            Login LMS-->
<!--                        </a> -->-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-6 col-12">-->
<!--                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">-->

<!--                        <img src="{{asset('img/civic-edu/hero-civic-main.png')}}" class="img-fluid" alt="working girl">-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


    <!-- ABOUT -->
<!--    <section class="about section-padding pb-0" id="about">-->
<!--        <div class="container">-->
<!--            <div class="row">-->

<!--                <div class="col-lg-7 mx-auto col-md-10 col-12">-->
<!--                    <div class="about-info">-->

<!--                        <h2 class="mb-2 mx-2" data-aos="fade-up">-->
<!--                            Tentang <strong style="color: #950c0c; font-weight: bold;">Civic Education</strong>-->
<!--                        </h2>-->

<!--                        <p class="mb-0" data-aos="fade-up">-->
<!--                            Program Edukasi dari Institut Hijau Indonesia untuk menumbuhkan <strong style="color: #950c0c;">kesadaran demokrasi, sosial, dan lingkungan.</strong>-->
<!--                            <br><br>-->
<!--                            Menggunakan pendekatan inklusif dan berbasis pengalaman, Civic Education mendorong <strong style="color: #950c0c;">generasi muda membangun negara yang adil secara sosial dan ekologis.</strong>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-12 mt-5">-->
<!--                    <h2 class="mb-5 text-center" data-aos="fade-up">-->
<!--                        Prepare Yourself-->
<!--                        <br>-->
<!--                        <strong style="color: #950c0c; font-weight: bold;">for Our Speaker</strong>-->
<!--                    </h2>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container" data-aos="fade-up" data-aos-delay="100">-->

<!--                <div class="row justify-content-center">-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/1.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Dr. Qurnia Indah Permata Sari-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/2.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Ahmad Fauzi (Ray Rangkuti)-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/3.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Dani Wahyu Munggoro-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/4.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Zainal Arifin Mochtar, S.H., LL.M.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/5.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Prof. Dr. H. Jimly Asshiddiqie, S.H., M.H.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/6.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Bivitri Susanti, S.H., LL.M.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/7.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Sudirman Said, S.Ak., MBA.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/8.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Prof. Dr. Bambang Shergi Laksmono, M.Sc.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/9.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    H. Anies Rashid Baswedan, S.E., M.PP., Ph.D.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/10.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Dr. Drs. Imam Budidarmawan Prasojo, M.A., Ph.D.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/11.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Prof. Dr. Djohermansyah Djohan, M.A.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/12.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Mochammad Afifuddin-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/13.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Titi Anggraini, S.H., M.H.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/14.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Rocky Gerung-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/15.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Dr. Revrisond Baswir, M.B.A., Ak., CA-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/16.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Prof. Dr. R. Siti Zuhro, MA.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/17.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Muhammad Isnur, S.H., M.H.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/18.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Uni Zulfiani Lubis-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/19.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Hj. Meutya Viada Hafid, B.Eng., M.IP.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/20.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Chalid Muhammad-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/21.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Hikmat Hardono-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/22.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Noer Fauzi Rachman-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/23.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Galuh Wandhita-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/24.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Hilmar Farid Setiadi-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/25.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Arif Havas Oegroseno, S.H., LL.M-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/26.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Eep Saefulloh Fatah-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-2 mx-2">-->
<!--                        <div class="card" style="width: 18rem;">-->
<!--                            <img src="{{asset('img/civic-edu/narsum/27.png')}}" class="card-img-top" alt="...">-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text text-center">-->
<!--                                    Dr. Ir. Pramono Anung Wibowo, M.M.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


    <!-- PROJECT -->
    <!-- <section class="project section-padding" id="project">
<!--        <div class="container-fluid">-->
<!--            <div class="row">-->

<!--                <div class="col-lg-12 col-12">-->

<!--                    <h2 class="mb-5 text-center" data-aos="fade-up">-->
<!--                        Please take a look through our-->
<!--                        <strong>featured Digital Trends</strong>-->
<!--                    </h2>-->

<!--                    <div class="owl-carousel owl-theme" id="project-slide">-->
<!--                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">-->
<!--                            <img src="{{asset('images/project/project-image01.jpg')}}" class="img-fluid" alt="project image">-->

<!--                            <div class="project-info">-->
<!--                                <small>Marketing</small>-->

<!--                                <h3>-->
<!--                                    <a href="project-detail.html">-->
<!--                                        <span>Sweet Go Agency</span>-->
<!--                                        <i class="fa fa-angle-right project-icon"></i>-->
<!--                                    </a>-->
<!--                                </h3>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="item project-wrapper" data-aos="fade-up">-->
<!--                            <img src="{{asset('images/project/project-image02.jpg')}}" class="img-fluid" alt="project image">-->

<!--                            <div class="project-info">-->
<!--                                <small>Website</small>-->

<!--                                <h3>-->
<!--                                    <a href="project-detail.html">-->
<!--                                        <span>Smart Ladies</span>-->
<!--                                        <i class="fa fa-angle-right project-icon"></i>-->
<!--                                    </a>-->
<!--                                </h3>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="item project-wrapper" data-aos="fade-up">-->
<!--                            <img src="{{asset('images/project/project-image03.jpg')}}" class="img-fluid" alt="project image">-->

<!--                            <div class="project-info">-->
<!--                                <small>Branding</small>-->

<!--                                <h3>-->
<!--                                    <a href="project-detail.html">-->
<!--                                        <span>Shoes factory</span>-->
<!--                                        <i class="fa fa-angle-right project-icon"></i>-->
<!--                                    </a>-->
<!--                                </h3>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="item project-wrapper" data-aos="fade-up">-->
<!--                            <img src="{{asset('images/project/project-image04.jpg')}}" class="img-fluid" alt="project image">-->

<!--                            <div class="project-info">-->
<!--                                <small>Social Media</small>-->

<!--                                <h3>-->
<!--                                    <a href="project-detail.html">-->
<!--                                        <span>Race Bicycle</span>-->
<!--                                        <i class="fa fa-angle-right project-icon"></i>-->
<!--                                    </a>-->
<!--                                </h3>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="item project-wrapper" data-aos="fade-up">-->
<!--                            <img src="{{asset('images/project/project-image05.jpg')}}" class="img-fluid" alt="project image">-->

<!--                            <div class="project-info">-->
<!--                                <small>Video</small>-->

<!--                                <h3>-->
<!--                                    <a href="project-detail.html">-->
<!--                                        <span>Ultimate HealthCare</span>-->
<!--                                        <i class="fa fa-angle-right project-icon"></i>-->
<!--                                    </a>-->
<!--                                </h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </section> -->-->


    <!-- TESTIMONIAL -->
    <!-- <section class="testimonial section-padding">
<!--        <div class="container">-->
<!--            <div class="row">-->

<!--                <div class="col-lg-6 col-md-5 col-12">-->
<!--                    <div class="contact-image" data-aos="fade-up">-->

<!--                        <img src="{{asset('images/female-avatar.png')}}" class="img-fluid" alt="website">-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-6 col-md-7 col-12">-->
<!--                    <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>-->

<!--                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>-->

<!--                    <h2 class="mb-2 mx-2" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>-->

<!--                    <p data-aos="fade-up" data-aos-delay="400">-->
<!--                        <strong>Mary Zoe</strong>-->

<!--                        <span class="mx-1">/</span>-->

<!--                        <small>Digital Agency (CEO)</small>-->
<!--                    </p>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </section> -->-->


<!--    <footer class="site-footer">-->
<!--        <div class="container">-->
<!--            <div class="row">-->

<!--                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">-->
<!--                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Institut Hijau Indonesia</h1>-->
<!--                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="100"><strong>Civic Education</strong></h2>-->
<!--                </div>-->

<!--                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">-->
<!--                    <h4 class="my-4">Contact Info</h4>-->

<!--                    <p class="mb-1">-->
                        <!-- <i class="fa fa-phone mr-2 footer-icon"></i> -->
                        <!-- +99 080 070 4224 -->
<!--                    </p>-->

<!--                    <p>-->
<!--                        <a href="#">-->
                            <!-- <i class="fa fa-envelope mr-2 footer-icon"></i> -->
<!--                            instituthijauindonesiahi@gmail.com-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>-->

<!--                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">-->
<!--                    <h4 class="my-4">Kantor Kami</h4>-->

<!--                    <p class="mb-1">-->
                        <!-- <i class="fas fa-home mr-2 footer-icon"></i> -->
<!--                        Gedung Manggala Wanabakti Blok IV lantai 7, Wing C-->
<!--                    </p>-->
<!--                </div>-->

<!--                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">-->
<!--                    <p class="copyright-text">Copyright &copy; 2025 by Institut Hijau Indonesia-->
<!--                        <br>-->
                        <!-- <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a> -->
<!--                    </p>-->
<!--                </div>-->

<!--                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">-->

<!--                    <ul class="footer-link">-->
<!--                        <li><a href="#">Stories</a></li>-->
<!--                        <li><a href="#">Work with us</a></li>-->
<!--                        <li><a href="#">Privacy</a></li>-->
<!--                    </ul>-->
<!--                </div>-->

                <!-- <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
<!--                    <ul class="social-icon">-->
<!--                        <li><a href="#" class="fa fa-instagram"></a></li>-->
<!--                        <li><a href="#" class="fa fa-twitter"></a></li>-->
<!--                        <li><a href="#" class="fa fa-dribbble"></a></li>-->
<!--                        <li><a href="#" class="fa fa-behance"></a></li>-->
<!--                    </ul>-->
<!--                </div> -->-->

<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->


    <!-- SCRIPTS -->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> -->
    <!-- <script src="{{asset('vendor/boostrap/js/bootstrap.min.js')}}"></script>
<!--    <script src="{{asset('vendor/aos/aos.js')}}"></script>-->
<!--    <script src="{{asset('vendor/owl/owl.carousel.min.js')}}"></script>-->
<!--    <script src="{{asset('js/smoothscroll.js')}}"></script>-->
<!--    <script src="{{asset('js/custom2.js')}}"></script> -->-->

<!--    <script src="{{asset('css/templatemo/js/jquery.min.js')}}"></script>-->
<!--    <script src="{{asset('css/templatemo/js/bootstrap.min.js')}}"></script>-->
<!--    <script src="{{asset('css/templatemo/js/aos.js')}}"></script>-->
<!--    <script src="{{asset('css/templatemo/js/owl.carousel.min.js')}}"></script>-->
<!--    <script src="{{asset('css/templatemo/js/smoothscroll.js')}}"></script>-->
<!--    <script src="{{asset('css/templatemo/js/custom2.js')}}"></script>-->
<!--</body>-->

<!--</html>-->
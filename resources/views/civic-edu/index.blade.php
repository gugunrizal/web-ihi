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

      <a href="index.html" class="logo d-flex align-items-center me-auto">
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
              <a href="https://lmscivic.instituthijauindonesia.or.id/" class="btn-get-started">Login CMS</a>
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
        <p>Prepare Yourslef for Civic Education</p>
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
              <img src="{{asset('img/civic-edu/narsum/12.png')}}" class="img-fluid rounded" alt="Mochammad Afifuddin">
              <p class="text-center mt-2">Mochammad Afifuddin</p>
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
              <img src="{{asset('img/civic-edu/narsum/14.png')}}" class="img-fluid rounded" alt="Rocky Gerung">
              <p class="text-center mt-2">Rocky Gerung</p>
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
              <img src="{{asset('img/civic-edu/narsum/18.png')}}" class="img-fluid rounded" alt="Uni Zulfiani Lubis">
              <p class="text-center mt-2">Uni Zulfiani Lubis</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/19.png')}}" class="img-fluid rounded" alt="Hj. Meutya Viada Hafid, B.Eng., M.IP.">
              <p class="text-center mt-2">Hj. Meutya Viada Hafid, B.Eng., M.IP.</p>
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
              <img src="{{asset('img/civic-edu/narsum/23.png')}}" class="img-fluid rounded" alt="Galuh Wandhita">
              <p class="text-center mt-2">Galuh Wandhita</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/24.png')}}" class="img-fluid rounded" alt="Hilmar Farid Setiadi">
              <p class="text-center mt-2">Hilmar Farid Setiadi</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{asset('img/civic-edu/narsum/25.png')}}" class="img-fluid rounded" alt="Arif Havas Oegroseno, S.H., LL.M">
              <p class="text-center mt-2">Arif Havas Oegroseno, S.H., LL.M</p>
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
                <img src="{{asset('/storage/'.$b->gambar_berita) }}" class="img-fluid" alt="">
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

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

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
@extends('template.master')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="badge-wrapper mb-3">
                        <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                            <div class="icon-circle me-2">
                                <i class="bi bi-bell"></i>
                            </div>
                            <span class="badge-text me-3">Social and Ecological Justice</span>
                        </div>
                    </div>

                    <h1 class="hero-title mb-4">INSTITUT HIJAU INDONESIA</h1>

                    <p class="hero-description mb-4">Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.</p>

                    <div class="cta-wrapper">
                        <a href="#about" class="btn btn-success">Selanjutnya</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="img/main-logo.png" alt="Business Growth" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Who We Are</p>
                    <h3>Institut Hijau Indonesia</h3>
                    <p class="fst-italic">
                        Institut hijau Indonesia didirikan pada tahun 2008, lembaga ini sengaja dihadirkan untuk menguatkan narasi-narasi tentang keadilan sosial dan keadilan lingkungan hidup. Kemudian, memfasilitasi lahirnya atau tumbuhnya pemimpin-pemimpin yang memiliki keadilan sosial dan ekologi di beragam wilayah dan sektor, serta, mengembangkan strategi kampanye popular agar bisa menjangkau publik luas yang punya perhatian terhadap isu lingkungan hidup <br>
                        Institut Hijau Indonesia secara sungguh-sungguh ingin membangun peradaban hijau Indonesia. Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.
                    </p>
                    <a href="{{route('tampilAbout')}}" class="read-more"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="{{asset('img/portfolio/ihi1.JPG')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-lg-12">
                                    <img src="{{asset('img/portfolio/ihi2.JPG')}}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{asset('img/portfolio/ihi3.JPG')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kegiatan Kami</h2>
            <p>Kegiatan Institut Hijau Indonesia</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="steps-5">
                <div class="process-container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="#">
                                    <div class="content">
                                        <span class="step-number">01</span>
                                        <div class="card-body">
                                            <div class="step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-GLI.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Green Leadership Indonesia</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Process Item -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="#">
                                    <div class="content">
                                        <span class="step-number">02</span>
                                        <div class="card-body">
                                            <div class="step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-GYM.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Green Youth Movement</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Process Item -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="#">
                                    <div class="content">
                                        <span class="step-number">03</span>
                                        <div class="card-body">
                                            <div class="step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-Greenpil.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Green Public Interest Lawyer</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Process Item -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="#">
                                    <div class="content">
                                        <span class="step-number">04</span>
                                        <div class="card-body">
                                            <div class=" step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-Ekososlab.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Laboratorium Keadilan Sosial dan Ekologis</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Process Item -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="#">
                                    <div class="content">
                                        <span class="step-number">05</span>
                                        <div class="card-body">
                                            <div class="step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-JPH.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Jurnal Peradaban Hijau</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Process Item -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{route('tampilCivic')}}">
                                    <div class="content">
                                        <span class="step-number">06</span>
                                        <div class="card-body">
                                            <div class="step-icon" style="background-color: white;">
                                                <img src="{{asset('img/logo-program/Logo-Civic.png')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="step-content">
                                                <h3>Civic Education</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /How We Work Section -->
    <!-- Team Section -->
    <section id="team" class="team section light-background">

        <!-- Section Title -->
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
        <div class="container">
            <div class="row" style="padding-top: 50px;">
                <div class="col-12 text-center">
                    <a href="{{route('tampilTim')}}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>

    </section>
    <!-- /Team Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Dokumentasi Kegiatan yang diselenggarakan Institut Hijau Indonesia</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli1.JPG')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli2.JPG')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli3.JPG')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli4.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli5.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/portfolio/gli6.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Green Leadership Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /Portfolio Section -->

    <!-- Blog Section -->
    <section id="blog" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portal Berita</h2>
            <p>Berita Kegiatan Institut Hijau Indonesia</p>
        </div><!-- End Section Title -->

        <div class="beritaTengah mx-auto container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="beritaTengah mx-auto row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                    @foreach ($berita as $b)

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                        <div class="portfolio-card beritaTengah mx-auto ">
                            <div class="portfolio-image beritaTengah mx-auto ">
                                <img src="{{ asset('/storage/'.$b->gambar_berita) }}" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-actions">
                                        <a href=" {{ asset('/storage/'.$b->gambar_berita)}}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                                        <!-- <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('tampilBeritaById', $b->id)}}">
                                <div class="portfolio-content">
                                    <!-- <span class="category">Green Leadership Indonesia</span> -->
                                    <h3>{{$b->judul}}</h3>
                                    <p>{{$b->ringkasan_berita}}</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Portfolio Container -->

            </div>

        </div>

        <div class="container">
            <div class="row" style="padding-top: 50px;">
                <div class="col-12 text-center">
                    <a href="{{route('tampilAllBerita')}}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>

    </section>
    <!-- End BLog Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Hubungi atau Kunjungi Kami untuk Informasi lebih lengkap</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h3>Alamat Kami</h3>
                        <p>Gedung Manggala Wanabakti Blok IV lantai 7, Wing C</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h3>Kontak Kami</h3>
                        <!-- <p>Mobile: +62 8123456789<br> -->
                        Email:
                        <a href="mailto:instituthijauindonesiaIHI@gmail.com">instituthijauindonesiaIHI@gmail.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-card">
                        <div class="icon-box">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h3>Jam Kerja</h3>
                        <p>Senin - Sabtu: 9:00 - 18:00<br>
                            Minggu: Tutup</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /Contact Section -->

</main>
@endsection
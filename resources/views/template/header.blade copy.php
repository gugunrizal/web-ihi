<header id="header" class="header d-flex align-items-center fixed-top bg-success">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('img/logo-ihi.png')}}" alt="">
            <!-- <h1 class="sitename">Invent</h1><span>.</span> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="" class="active">Beranda</a></li>
                <li class="dropdown"><a href="#" class=""><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{route('tampilAbout')}}">Sejarah</a></li>
                        <li><a href="{{route('tampilTim')}}">Pengurus Inti</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class=""><span>Program Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{route('tampilGreenLeader')}}">Green Leadership Indonesia</a></li>
                        <li><a href="#">Green Youth Movement</a></li>
                        <li><a href="#">Green Public Interest Lawyer</a></li>
                        <li><a href="#">Laboratorium Keadilan Sosial dan Ekologis</a></li>
                        <li><a href="#">Jurnal Peradaban Hijau</a></li>
                        <li><a href="{{route('tampilCivic')}}">Civic Education</a></li>
                    </ul>
                </li>
                <li><a href="" class="">Blog</a></li>
                <!-- <li><a href="#hero" class="active">Beranda</a></li>
                <li><a href="#about" class="">Tentang Kami</a></li>
                <li><a href="#how-we-work" class="">Program Kami</a></li>
                <li><a href="#team" class="">Tim</a></li>
                <li><a href="#portfolio" class="">Galeri</a></li>
                <li><a href="#blog" class="">Blog</a></li>
                <li><a href="#contact" class="">Kontak Kami</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- <a class="btn-getstarted" href="{{route('login')}}">Login</a> -->

    </div>
</header>
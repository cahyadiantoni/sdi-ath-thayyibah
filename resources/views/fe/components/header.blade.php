<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo-sd.png')}}" alt="">
            <h1 class="sitename">SDI Ath Thayyibah</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ route('guru') }}" class="{{ Request::routeIs('guru') ? 'active' : '' }}">Guru & Staff</a>
                </li>
                <li>
                    <a href="{{ route('artikel') }}" class="{{ Request::routeIs('artikel') ? 'active' : '' }}">Artikel</a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}" class="{{ Request::routeIs('galeri') ? 'active' : '' }}">Galeri</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

    </div>
</header>
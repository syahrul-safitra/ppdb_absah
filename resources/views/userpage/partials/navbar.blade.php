<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href=""><img style="width: 80px; height: 80px"
                src="{{ asset('userpage/img/LOGO_ABSHAH.png') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('sejarah') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('sejarah') }}">Profil</a>
                </li>
                {{-- <li class="nav-item {{ Request::is('sejarah') ? 'active' : null }} submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Request::is('sejarah') ? 'active' : null }}">
                            <a class="nav-link" href="{{ url('sejarah') }}">Sejarah Ponpes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course-details.html">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="elements.html">Elements</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pendaftaran') }}">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cek') }}">Cek Pendaftaran</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Pendaftaran Asli</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ url('https://psb.abshah.ponpes.id/public/psb/daftar') }}">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ url('https://psb.abshah.ponpes.id/public/psb/daftar/cek-status') }}">Cek
                                Pendaftaran</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li> --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container d-flex align-items-center justify-content-between">
    <a href="/beranda" class="logo"><img src="{{ asset('landingpage/img/logoutama.png') }}" alt="" class="img-fluid"></a>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="/beranda">Beranda</a></li>
            <li><a class="nav-link scrollto" href="/panduan">Panduan</a></li>
            <li><a class="nav-link scrollto active" href="/video">Video</a></li>
            <li><a class="nav-link scrollto" href="/berita">Berita</a></li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout text-primary"></i>{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
</div>
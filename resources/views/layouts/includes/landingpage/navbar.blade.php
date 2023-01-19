<div class="container d-flex align-items-center justify-content-between">
    <a href="/" class="logo"><img src="{{ asset('landingpage/img/logoutama.png') }}" alt="" class="img-fluid"></a>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
            <li><a class="nav-link scrollto" href="{{ route('login') }}">Panduan</a></li>
            <li><a class="nav-link scrollto" href="{{ route('login') }}">Video</a></li>
            <li><a class="nav-link scrollto " href="{{ route('login') }}">Berita</a></li>
            <li><a href="{{ route('login') }}" class="btn-get-started">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
</div>
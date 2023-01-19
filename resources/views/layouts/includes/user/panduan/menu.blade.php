<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Beranda {{ config('app.name', 'Laravel') }}</title>
        
        <meta content="" name="description">

        <meta content="" name="keywords">

        <link href="{{ asset('landingpage/img/logoutamastroke.png') }}" rel="icon">

        <link href="{{ asset('landingpage/img/logoutamastroke.png') }}" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('admin/images/logoutamastroke.png') }}" />

        @livewireStyles
    </head>
    <body>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="/beranda" class="logo"><img src="{{ asset('landingpage/img/logoutama.png') }}" alt="" class="img-fluid"></a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="/beranda">Beranda</a></li>
                        <li><a class="nav-link scrollto active" href="/panduan">Panduan</a></li>
                        <li><a class="nav-link scrollto" href="/video">Video</a></li>
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
        </header>
        <main id="main">
            <section>
                <div class="section">
                    <div class="cards">
                        <div class="panduan-manasik">
                            <div class="section-title">
                                <h1>Panduan Manasik Haji</h1>
                            </div>
                        </div>
                        @forelse ($panduan as $row)
                        <!-- <div class="card" style="width: 18rem; margin: 10px; height: 350px">
                            <img class="card-img-top" src="{{ asset('/uploads/'. $row->gambar_panduan) }}" alt="Card image cap" style="width:18rem; height: 200px">
                            <div class="card-body">
                                <a href="{{ route('detail-panduan', $row->slug) }}">
                                    <h5 class="card-title">{{ $row->judul_panduan }}</h5>
                                </a>
                                <p class="card-text">{!! Str::limit($row->deskripsi_panduan,10) !!}</p>
                            </div>
                        </div> -->
                            <div class="card2" style="height: 300px">
                                <div class="image-section">
                                    <img src="{{ asset('/uploads/'. $row->gambar_panduan) }}">
                                </div>
                                <div class="title">
                                    <a href="{{ route('detail-panduan', $row->slug) }}"><h4><b>{{ $row->judul_panduan }}</b></h4></a>
                                </div>
                                <!-- <div class="description" style="margin: 10px">
                                    {!! Str::limit($row->deskripsi_panduan,50) !!}
                                </div> -->
                            </div>
                        @empty
                            <p>Panduan Masih Kosong</p>
                        @endforelse
                    </div>
                    <center>{{ $panduan->links() }}</center>
                </div>
            </section>
        </main>

        <!-- Vendor JS Files -->
        <script src="{{ asset('landingpage/vendor/purecounter/purecounter.js') }}"></script>

        <script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('landingpage/vendor/glightbox/js/glightbox.min.js') }}"></script>

        <script src="{{ asset('landingpage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <script src="{{ asset('landingpage/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <script src="{{ asset('landingpage/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('landingpage/js/main.js') }}"></script>

        <script src="/path/to/jquery.min.js"></script>

        <script src="/path/to/bootstrap.min.js"></script>
        
        <script src="{{ asset('landingpage/js/carousel.js') }}"></script>

        <script>
            try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                return true;
            }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
            } catch (error) {
            console.log(error);
            }
        </script>

        <!--scripts loaded here-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="{{ asset('landingpage/js/carousel.js') }}"></script>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

        @livewireScripts
    </body>
</html>
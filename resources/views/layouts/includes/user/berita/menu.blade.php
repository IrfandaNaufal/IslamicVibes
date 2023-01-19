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
                        <li><a class="nav-link scrollto" href="/panduan">Panduan</a></li>
                        <li><a class="nav-link scrollto" href="/video">Video</a></li>
                        <li><a class="nav-link scrollto active" href="/berita">Berita</a></li>
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
                                <h1>Berita</h1>
                            </div>
                        </div>
                        <!-- <div class="row" data-aos="fade-up">
                            <div class="stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                    @forelse ($berita as $row)
                                        <div class="row">
                                            <div class="col-sm-2 grid-margin">
                                                <div class="position-relative">
                                                    <div class="rotate-img">
                                                        <img src="{{ asset('/uploads/'. $row->gambar_berita) }}" alt="thumb" class="img-fluid"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10  grid-margin">
                                                <div class="pr-3">
                                                    <a href="{{ route('detail-berita', $row->slug) }}">
                                                        <h3 class="mb-2 font-weight-600">
                                                            {{ $row->judul_berita }}
                                                        </h3>
                                                    </a>
                                                </div>
                                                <p class="mb-0">
                                                    {!! $row->isi_berita !!}
                                                </p>
                                            </div>
                                        </div>
                                    @empty
                                        <p>Berita Masih Kosong</p>
                                    @endforelse
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--Section: News of the day-->
                        @forelse ($berita as $row)
                        <div class="row gx-5" style="margin: 20px;">
                            <div class="col-md-4 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                                    <img src="{{ asset('/uploads/'. $row->gambar_berita) }}" class="img-fluid" style="height: 250px; width: 400px"/>
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 mb-4" style="text-align: justify;">
                                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">{{ $row->kategori->nama_kategori }}</span>
                                <div class="d-flex justify-content-between tm-text-gray" style="font-size: 12px">
                                    <span>{{ $row->created_at->isoFormat('D MMMM Y') }}</span>
                                </div>
                                <p>
                                    <h4><strong>{{ $row->judul_berita }}</strong></h4>
                                </p>
                                <p class="text-muted">{!! Str::limit($row->isi_berita,400) !!}<a href="{{ route('detail-berita', $row->slug) }}" class="tm-text-primary mr-4 mb-2 d-inline-block" style="text-decoration: underline">Lihat Selengkapnya.</a></p>
                                <!-- <button type="button" class="btn btn-primary">
                                    <a href="{{ route('detail-berita', $row->slug) }}" style="color: #fff">Read more</a>
                                </button> -->
                            </div>
                        </div>
                        @empty
                            <p>Berita Masih Kosong</p>
                        @endforelse
                        <!--Section: News of the day-->
                    </div>
                    <center>{{ $berita->links() }}</center>
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
        <!-- <a href="https://www.jqueryscript.net/tags.php?/Carousel/">Carousel</a> Extension -->
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
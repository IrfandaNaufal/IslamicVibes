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
                        <li><a class="nav-link scrollto active" href="/beranda">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="/panduan">Panduan</a></li>
                        <li><a class="nav-link scrollto" href="/video">Video</a></li>
                        <li><a class="nav-link scrollto " href="/berita">Berita</a></li>
                        <li>
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
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Selamat Datang</h1>
                        <p></p>
                        <h2>Islamic Vibes adalah startup berbasis website penyedia layanan jasa untuk agen travel haji dan umrah, yang menyediakan pembelian paket haji dan umrah milik agen travel, penyimpanan data jamaah, penyimpanan data transaksi, dan website khusus untuk menyediakan panduan, konten, dan berita terbaru tentang haji.</h2>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="{{ asset('landingpage/img/logoutama.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <main id="main">
            <section id="hero" class="portfolio">
                <div>
                    <div class="cards">
                        <div class="panduan-manasik">
                            <div class="section-title">
                                <h1>Konten Pilihan</h1>
                            </div>
                        </div>
                        @foreach ($videoPilihan as $row)
                            <div class="card2" style="height:150px">
                                <div class="image-section">
                                    <video controls height="200px" loop>
                                        <source src="{{ asset('/uploads/'. $row->konten) }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="gallery" class="gallery">
                <div class="container">
                    <div class="section-title">
                        <h2>Galeri</h2>
                    </div>
                    <div class="container text-center">
                        <div class="row mx-auto my-auto">
                            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">
                                    @foreach ($galeri as $key => $row)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
                                            <div class="col-lg-4 col-md-6">
                                                <img class="img-fluid" src="{{ asset('uploads/' . $row->gambar_galeri) }}" style="height:200px; width:300px">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>
                                <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>Kontak Kami</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi</h4>
                                    <p>Jl. Kaliurang No.Km. 14,5, Krawitan, Umbulmartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</p>
                                </div>
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email</h4>
                                    <p>info@example.com</p>
                                </div>
                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Nomor Telepon</h4>
                                    <p>021-123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <div>
                                <iframe style="border:0; width: 100%; height: 270px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.956448148307!2d110.41105851385659!3d-7.687823178248434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sUniversitas%20Islam%20Indonesia!5e0!3m2!1sid!2sid!4v1658014652421!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer id="footer">
            <section style="background-color:#030F29">
                <div class="container">
                    <div class="copyright" style="color: #FFFFFF;">
                        &copy; Copyright <strong><span>Islamic Vibes</span></strong>
                    </div>
                </div>
            </section>
        </footer>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
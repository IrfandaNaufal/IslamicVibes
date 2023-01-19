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

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/css/templatemo-style.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/css/bootstrap.min.css') }}" rel="stylesheet">

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
        </header>
        <!-- <main id="main">
            <section>
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card" data-aos="fade-up">
                                    <div class="card-body">
                                        <div class="aboutus-wrapper">
                                            <div class="row mb-5 pb-4">
                                                <div class="col-12">
                                                    <center>
                                                        <video width="760" height="480" controls>
                                                            <source src="{{ asset('uploads/' . $video->konten) }}" type="video/mp4">
                                                        </video>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row mb-5 pb-5">
                                                <div class="col-xl-8 col-lg-7">
                                                    <div class="tm-video-description-box">
                                                        <h1 class="mb-5 tm-video-title">{{ $video->judul_video }}</h1>
                                                        <p class="mb-4">{!! $video->deskripsi_video !!}</p>
                                                    </div>							
                                                </div>
                                            </div>
                                            {{-- <div class="row pt-4 pb-5">
                                                <div class="col-12">
                                                    <h1 class="mb-5 tm-text-primary">Video Lainnya</h1>
                                                    <div class="row tm-catalog-item-list">
                                                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                                                            <div class="position-relative tm-thumbnail-container">
                                                                <img src="{{ asset('uploads/' . $video->gambar_video) }}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                                                <a href="{{ route('detail-video', $video->slug) }}" class="position-absolute tm-img-overlay"></a>
                                                            </div>    
                                                            <div class="p-3 tm-catalog-item-description">
                                                                <h3 class="tm-text-gray text-center tm-catalog-item-title">{{ $video->judul_video }}</h3>		                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main> -->

        <main id="main">
            <section style="margin: 10px;">
                <div class="container-fluid tm-container-content tm-mt-60">
                    <div class="row mb-4">
                        <h2 class="col-12 tm-text">{{ $video->judul_video }}</h2>
                    </div>
                    <div class="row tm-mb-90">            
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <video id="tm-video" controls>
                                <source src="{{ asset('uploads/' . $video->konten) }}" type="video/mp4">
                            </video>  
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="tm-bg-gray tm-video-details">
                                <p class="mb-4">
                                    {!! $video->deskripsi_video !!}
                                </p>                  
                                <div class="mb-4 d-flex flex-wrap">
                                    <div>
                                        <span class="tm-text-gray-dark">Diunggah: </span><span class="tm-text-primary">{{ $video->created_at->isoFormat('D MMMM Y') }}</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h5 class="tm-text-gray-dark mb-3">Sumber Video</h5>
                                    <p>{{ $video->sumber_video }}</p>
                                </div>
                                <div>
                                    <h5 class="tm-text-gray-dark mb-3">Playlist</h5>
                                    <a href="#" class="btn btn-dark">{{ $video->playlist->nama_playlist }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <h2 class="col-12 tm-text">
                            Video Lainnya
                        </h2>
                    </div>
                    <div class="row mb-3 tm-gallery">
                        @foreach ($videoLainnya as $row)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="height: 100%;">
                                <figure class="effect-ming tm-video-item" style="width: 320px; height: 200px;">
                                    <img src="{{ asset('/uploads/'. $row->gambar_video) }}" alt="Image" class="img-fluid">
                                    <figcaption class="d-flex align-items-center justify-content-center">
                                        <h2>{{ $row->judul_video }}</h2>
                                        <a href="{{ route('detail-video', $row->slug) }}"></a>
                                    </figcaption>                    
                                </figure>
                                <!-- <div class="d-flex justify-content-between tm-text-gray">
                                    <span class="tm-text-gray-light">{{ $row->created_at->isoFormat('D MMM Y') }}</span>
                                </div> -->
                            </div>
                        @endforeach
                    </div>
                    <center>{{ $videoLainnya->links() }}</center>
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
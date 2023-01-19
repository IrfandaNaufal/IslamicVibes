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
        <main id="main">
            <section>
                <div class="section">
                    <div class="cards">
                        <div class="panduan-manasik">
                            <div class="section-title">
                                <h1>Video</h1>
                            </div>
                        </div>
                        @forelse ($video as $row)
                            <!-- <div class="card2" style="height:200px">
                                <div class="image-section">
                                    <img src="{{ asset('/uploads/'. $row->gambar_video) }}">
                                </div>
                                <div class="title">
                                    <a href="{{ route('detail-video', $row->slug) }}"><h4><b>{{ $row->judul_video }}</b></h4></a>
                                </div>
                            </div> -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="margin: 10px; height: 100%;">
                                <figure class="effect-ming tm-video-item" style="width: 350px; height: 200px">
                                    <img src="{{ asset('/uploads/'. $row->gambar_video) }}" alt="Image" class="img-fluid">
                                    <figcaption class="d-flex align-items-center justify-content-center">
                                        <h2>{{ $row->judul_video }}</h2>
                                        <a href="{{ route('detail-video', $row->slug) }}"></a>
                                    </figcaption>                    
                                </figure>
                                <!-- <div class="d-flex justify-content-between tm-text-gray">
                                    <span>{{ $row->created_at->isoFormat('D MMM Y') }}</span>
                                </div> -->
                            </div>
                        @empty
                            <p>Video Masih Kosong</p>
                        @endforelse
                    </div>
                    <center>{{ $video->links() }}</center>
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

        <script src="{{ asset('landingpage/js/plugins.js') }}"></script>

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

        <script>
            $(window).on("load", function() {
                $('body').addClass('loaded');
            });

            $(function(){
                    /************** Video background *********/

                function setVideoSize() {
                    const vidWidth = 1280;
                    const vidHeight = 720;
                    const maxVidHeight = 400;
                    let windowWidth = window.innerWidth;
                    let newVidWidth = windowWidth;
                    let newVidHeight = windowWidth * vidHeight / vidWidth;
                    let marginLeft = 0;
                    let marginTop = 0;
                    
                    if (newVidHeight < maxVidHeight) {
                        newVidHeight = maxVidHeight;
                        newVidWidth = newVidHeight * vidWidth / vidHeight;
                    }
                    
                    if(newVidWidth > windowWidth) {
                        marginLeft = -((newVidWidth - windowWidth) / 2);
                    }
                    
                    if(newVidHeight > maxVidHeight) {
                        marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
                    }
                    
                    const tmVideo = $('#tm-video');
                    
                    tmVideo.css('width', newVidWidth);
                    tmVideo.css('height', newVidHeight);
                    tmVideo.css('margin-left', marginLeft);
                    tmVideo.css('margin-top', marginTop);
                }

                setVideoSize();

                // Set video background size based on window size
                let timeout;
                window.onresize = function () {
                    clearTimeout(timeout);
                    timeout = setTimeout(setVideoSize, 100);
                };

                    // Play/Pause button for video background      
                const btn = $("#tm-video-control-button");

                btn.on("click", function (e) {
                    const video = document.getElementById("tm-video");
                    $(this).removeClass();

                    if (video.paused) {
                        video.play();
                        $(this).addClass("fas fa-pause");
                    } else {
                        video.pause();
                        $(this).addClass("fas fa-play");
                    }
                });
            });
        </script>

        @livewireScripts
    </body>
</html>
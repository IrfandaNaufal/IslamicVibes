<div class="section-title">
    <h2>Galeri</h2>
</div>
<div class="container text-center">
    <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100">
                @foreach ($galeri as $key => $row)
                <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
                    <div class="col-lg-4">
                        <img src="{{ asset('uploads/' . $row->gambar_galeri) }}" class="img-fluid" style="height: 200px; width:300px">
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
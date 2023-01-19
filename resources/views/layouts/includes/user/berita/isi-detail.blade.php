<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <h1 class="font-weight-600 mb-1">
                            {{ $berita->judul_berita }}
                        </h1>
                        <div class="rotate-img">
                            <img src="{{ asset('/uploads/'. $berita->gambar_berita) }}" alt="banner" class="img-fluid mt-4 mb-4"/>
                        </div>
                        <a href="#" class="btn btn-dark">{{ $berita->kategori->nama_kategori }}</a>
                        <p class="mb-4 fs-15">
                            {!! $berita->isi_berita !!}
                        </p>
                    </div>
                    <div></div>
                </div>
                <div class="col-sm-4">
                    <h2 class="mb-4 text-primary font-weight-600">
                        Berita Terbaru
                    </h2>
                    @foreach ($beritaTerbaru as $row)
                        <div class="row">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            <a href="{{ route('detail-berita', $row->slug) }}">{{ $row->judul_berita }}</a>
                                        </h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="{{ asset('/uploads/'. $row->gambar_berita) }}" alt="banner" class="img-fluid"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
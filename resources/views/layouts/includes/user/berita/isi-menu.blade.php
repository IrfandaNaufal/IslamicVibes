<div class="panduan-manasik">
    <div class="section-title">
        <h1>Berita Terbaru</h1>
    </div>
</div>
<div class="row" data-aos="fade-up">
    <div class="row" data-aos="fade-up">
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
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <div class="aboutus-wrapper">
                    <h1><b>{{ $panduan->judul_panduan }}</b></h1>
                    <p></p>
                    <img src="{{ asset('/uploads/'. $panduan->gambar_panduan) }}" width="100%" alt="banner" class="img-fluid mb-5"/>
                    <p class="font-weight-600 fs-15">
                        {!! $panduan->deskripsi_panduan !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
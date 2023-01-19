<div class="cards">
    <div class="panduan-manasik">
        <div class="section-title">
            <h1>Video</h1>
        </div>
    </div>
    @forelse ($video as $row)
        <div class="card2" style="height:200px">
            <div class="image-section">
                <img src="{{ asset('/uploads/'. $row->gambar_video) }}">
            </div>
            <div class="title">
                <a href="{{ route('detail-video', $row->slug) }}"><h4><b>{{ $row->judul_video }}</b></h4></a>
            </div>
        </div>
    @empty
        <p>Video Masih Kosong</p>
    @endforelse
</div>
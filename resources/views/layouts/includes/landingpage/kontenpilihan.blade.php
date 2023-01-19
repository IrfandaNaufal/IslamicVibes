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
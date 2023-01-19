<div class="row">
    <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <div class="aboutus-wrapper">
                    <div class="row mb-5 pb-4">
                        <div class="col-12">
                            <video width="1280" height="760" autoplay>
                                <source src="{{ asset('uploads/' . $video->konten) }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="row mb-5 pb-5">
                        <div class="col-xl-8 col-lg-7">
                            <!-- Video description -->
                            <div class="tm-video-description-box">
                                <h1 class="mb-5 tm-video-title">{{ $video->judul_video }}</h1>
                                <p class="mb-4">{!! $video->deskripsi_video !!}</p>
                            </div>							
                        </div>
                    </div>
                    <div class="row pt-4 pb-5">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
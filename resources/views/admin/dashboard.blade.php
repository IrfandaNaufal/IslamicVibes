@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h2 class="alert alert-success">{{ session('message') }}</h2>
            @endif
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-info">
                                    <div class="inner text-white">
                                        <p><b><h2>Users</h2></b></p>
                                        <br>
                                        <p><h1>{{ $users }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-human text-black"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-warning">
                                        <div class="inner text-white">
                                            <p><b><h2>Kategori</h2></b></p>
                                            <br>
                                            <p><h1>{{ $kategori }}</h1></p>
                                        </div>
                                        <div class="icon">
                                            <br>
                                            <i class="mdi mdi-tag text-black"></i>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-reddit">
                                    <div class="inner text-white">
                                        <p><b><h2>Playlist</h2></b></p>
                                        <br>
                                        <p><h1>{{ $playlist }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-film text-black"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-google">
                                    <div class="inner text-white">
                                        <p><b><h2>Galeri</h2></b></p>
                                        <br>
                                        <p><h1>{{ $galeri }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-image text-black"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box btn-success">
                                    <div class="inner text-white">
                                        <p><b><h2>Panduan</h2></b></p>
                                        <br>
                                        <p><h1>{{ $panduan }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-book text-black"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-youtube">
                                    <div class="inner text-white">
                                        <p><b><h2>Video</h2></b></p>
                                        <br>
                                        <p><h1>{{ $video }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-video text-black"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="small-box bg-primary">
                                    <div class="inner text-white">
                                        <p><b><h2>Berita</h2></b></p>
                                        <br>
                                        <p><h1>{{ $berita }}</h1></p>
                                    </div>
                                    <div class="icon">
                                        <br>
                                        <i class="mdi mdi-newspaper text-black"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection     
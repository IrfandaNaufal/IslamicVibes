@extends('layouts.video')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Tambah Video
                        <a href="{{ url('admin/video') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/video') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="judul_video" class="col-sm-2 col-form-label">Judul Video</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul_video" id="text" placeholder="Masukkan Judul Video">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar_video" class="col-sm-2 col-form-label">Thumbnail</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="gambar_video">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="konten" class="col-sm-2 col-form-label">Video</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="konten">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sumber_video" class="col-sm-2 col-form-label">Sumber Video</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sumber_video" id="text" placeholder="Masukkan Sumber Video">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="playlist" class="col-sm-2 col-form-label">Playlist</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="playlist_id">
                                                    @foreach ($playlist as $row)
                                                        <option value="{{ $row->id }}" selected>{{ $row->nama_playlist }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi_video" class="col-sm-2 col-form-label">Deskripsi Video</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="deskripsi_video" id="summernote"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm text-white float-end" style="margin-bottom: 20px;">Tambah Video</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
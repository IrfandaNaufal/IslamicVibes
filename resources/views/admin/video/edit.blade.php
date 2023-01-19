@extends('layouts.video')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Edit Video
                        <a href="{{ url('admin/video') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/video', $video->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="judul_video" class="col-sm-2 col-form-label">Judul Video</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul_video" id="text" value="{{ $video->judul_video }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sumber_video" class="col-sm-2 col-form-label">Sumber Video</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sumber_video" id="text" value="{{ $video->sumber_video }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="playlist" class="col-sm-2 col-form-label">Playlist</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="playlist_id">
                                                    @foreach ($playlist as $row)
                                                        @if ($row->id == $video->playlist_id)
                                                            <option value={{ $row->id }} selected='selected'>{{ $row->nama_playlist }}</option>
                                                        @else
                                                            <option value="{{ $row->id }}">{{ $row->nama_playlist }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi_video" class="col-sm-2 col-form-label">Deskripsi Video</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote" class="form-control" name="deskripsi_video">{{ $video->deskripsi_video }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar_video" class="col-sm-2 col-form-label">Thumbnail</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="gambar_video">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar_video" class="col-sm-2 col-form-label">Thumbnail Saat Ini</label>
                                            <div class="col-sm-10">
                                                <img src="{{ asset('uploads/'. $video->gambar_video) }}" width="200">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="konten" class="col-sm-2 col-form-label">Video</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="konten">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="konten" class="col-sm-2 col-form-label">Video Saat Ini</label>
                                            <div class="col-sm-10">
                                                <video src="{{ asset('uploads/'. $video->konten) }}" width="200" controls>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm text-white float-end" style="margin-bottom: 20px;">Simpan</button>
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
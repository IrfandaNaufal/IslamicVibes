@extends('layouts.playlist')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Tambah Playlist
                        <a href="{{ url('admin/playlist') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/playlist') }}">
                                    @csrf
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="nama_playlist" class="col-sm-2 col-form-label">Nama playlist</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_playlist" id="text" placeholder="Masukkan Nama Playlist">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm text-white float-end" style="margin-bottom: 20px;">Tambah Playlist</button>
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
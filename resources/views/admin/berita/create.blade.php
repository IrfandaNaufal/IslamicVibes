@extends('layouts.berita')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Tambah Berita
                        <a href="{{ url('admin/berita') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/berita') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="judul_berita" class="col-sm-2 col-form-label">Judul Berita</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul_berita" id="text" placeholder="Masukkan Judul Berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar_berita" class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="gambar_berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori_id" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kategori_id">
                                                    @foreach ($kategori as $row)
                                                        <option value="{{ $row->id }}" selected>{{ $row->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="isi_berita" class="col-sm-2 col-form-label">Isi</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="isi_berita" id="summernote"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm text-white float-end" style="margin-bottom: 20px;">Tambah Berita</button>
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
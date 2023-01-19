@extends('layouts.panduan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Tambah Panduan Manasik Haji
                        <a href="{{ url('admin/panduan') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/panduan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="judul_panduan" class="col-sm-2 col-form-label">Judul Panduan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul_panduan" id="text" placeholder="Masukkan Judul Panduan Manasik Haji">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi_panduan" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="deskripsi_panduan" id="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar_panduan" class="col-sm-2 col-form-label">Gambar Panduan</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="gambar_panduan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sumber_gambar" class="col-sm-2 col-form-label">Sumber Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sumber_gambar" id="text" placeholder="Masukkan Sumber Gambar">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm text-white float-end" style="margin-bottom: 20px;">Tambah Panduan Manasik Haji</button>
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
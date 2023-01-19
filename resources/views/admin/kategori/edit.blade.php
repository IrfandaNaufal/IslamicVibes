@extends('layouts.kategori')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Edit Kategori
                        <a href="{{ url('admin/kategori') }}" class="btn btn-danger btn-sm text-white float-end">< Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <form class="form-horizontal" method="post" action="{{ url('admin/kategori', $kategori->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <p></p>
                                        <div class="form-group row">
                                            <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_kategori" id="text" value="{{ $kategori->nama_kategori }}">
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
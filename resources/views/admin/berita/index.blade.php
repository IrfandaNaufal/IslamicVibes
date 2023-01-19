@extends('layouts.berita')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Data Berita
                        <a href="{{ url('admin/berita/create') }}" class="btn btn-primary btn-sm text-white float-end">+ Tambah Berita</a>
                    </h2>
                </div>
                <div class="card-body">
                    <section class="content">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Judul Berita</th>
                                            <th>Gambar</th>
                                            <th>Kategori</th>
                                            <!-- <th>Isi</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($berita as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->judul_berita }}</td>
                                            <td><img src="{{ asset('uploads/'. $row->gambar_berita) }}"></td>
                                            <td>{{ $row->kategori->nama_kategori }}</td>
                                            <!-- <td>{!! Str::limit($row->isi_berita,50) !!}</td> -->
                                            <td>
                                                <a href="{{ url('admin/berita/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ url('admin/berita', $row['id']) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('GET')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">Berita Masih Kosong</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
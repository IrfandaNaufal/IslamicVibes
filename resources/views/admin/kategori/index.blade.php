@extends('layouts.kategori')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Data Kategori
                        <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary btn-sm text-white float-end">+ Tambah Kategori</a>
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
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategori as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->nama_kategori }}</td>
                                            <td>
                                                <a href="{{ url('admin/kategori/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ url('admin/kategori', $row['id']) }}" method="post" class="d-inline">
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
                                            <td colspan="6">Kategori Masih Kosong</td>
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
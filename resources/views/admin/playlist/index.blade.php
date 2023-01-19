@extends('layouts.playlist')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Data Playlist
                        <a href="{{ url('admin/playlist/create') }}" class="btn btn-primary btn-sm text-white float-end">+ Tambah Playlist</a>
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
                                            <th>Nama Playlist</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($playlist as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->nama_playlist }}</td>
                                            <td>
                                                <a href="{{ url('admin/playlist/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ url('admin/playlist', $row['id']) }}" method="post" class="d-inline">
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
                                            <td colspan="6">Playlist Masih Kosong</td>
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
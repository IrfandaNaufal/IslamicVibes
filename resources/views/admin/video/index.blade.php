@extends('layouts.video')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Data Video
                        <a href="{{ url('admin/video/create') }}" class="btn btn-primary btn-sm text-white float-end">+ Tambah Video</a>
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
                                            <th>Judul Video</th>
                                            <th>Thumbnail</th>
                                            <th>Video</th>
                                            <th>Playlist</th>
                                            <!-- <th>Deskripsi Video</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($video as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->judul_video }}</td>
                                            <td><img src="{{ asset('uploads/'. $row->gambar_video) }}"></td>
                                            <td><video src="{{ asset('uploads/'. $row->konten) }}" width="200px" controls></td>
                                            <td>{{ $row->playlist->nama_playlist }}</td>
                                            <!-- <td>{!! Str::limit($row->deskripsi_video,50) !!}</td> -->
                                            <td>
                                                <a href="{{ url('admin/video/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ url('admin/video', $row['id']) }}" method="post" class="d-inline">
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
                                            <td colspan="6">Video Masih Kosong</td>
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
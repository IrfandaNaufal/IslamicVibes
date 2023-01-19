<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlist = Playlist::all();
        return view('admin.playlist.index', compact('playlist'));
    }

    public function create()
    {
        return view('admin.playlist.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_playlist' => 'required',
        ]);

        $playlist = Playlist::create([
            'nama_playlist' => $request->nama_playlist,
            'slug' => Str::slug($request->nama_playlist),
        ]);

        return redirect('admin/playlist')->with(['success' => 'Playlist Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $playlist = Playlist::find($id);
        return view ('admin.playlist.edit', compact('playlist'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_playlist);

        $playlist = Playlist::findOrFail($id);
        $playlist->update($data);

        return redirect('admin/playlist')->with(['success' => 'Playlist Berhasil Diubah']);
    }

    public function destroy($id)
    {
        $playlist = Playlist::where('id', $id)->delete();

        return redirect('admin/playlist')->with(['success' => 'Playlist Berhasil Dihapus']);
    }
}
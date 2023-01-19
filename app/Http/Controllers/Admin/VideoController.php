<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::all();
        return view('admin.video.index', compact('video'));
    }

    public function create()
    {
        $playlist = Playlist::all();
        return view('admin.video.create', compact('playlist'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_video' => 'required',
            'gambar_video' => 'required',
            'konten' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts,mkv|max:100040|required',
            'deskripsi_video' => 'required',
            'sumber_video' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_video);
        $data['gambar_video'] = $request->file('gambar_video')->store('video');
        $data['konten'] = $request->file('konten')->store('video');

        Video::create($data);

        return redirect('admin/video')->with(['success' => 'Video Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $playlist = Playlist::all();

        return view('admin.video.edit', [
            'video' => $video,
            'playlist' => $playlist,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar_video' => 'required',
            'konten' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
        ]);
        
        if(empty($request->file('gambar_video'))) {

            $video = Video::find($id);
            $video->update([
                'judul_video' => $request->judul_video,
                'slug' => Str::slug($request->judul_video),
                'deskripsi_video' => $request->deskripsi_video,
                'playlist_id' => $request->playlist_id,
                'konten' => $request->file('konten')->store('video'),
            ]);
            return redirect('admin/video')->with(['success' => 'Video Berhasil Diedit']);
        }else {
            $video = Video::find($id);
            Storage::delete($video->gambar_video);
            $video->update([
                'judul_video' => $request->judul_video,
                'slug' => Str::slug($request->judul_video),
                'deskripsi_video' => $request->deskripsi_video,
                'playlist_id' => $request->playlist_id,
                'konten' => $request->file('konten')->store('video'),
                'gambar_video' => $request->file('gambar_video')->store('video'),
            ]);
            return redirect('admin/video')->with(['success' => 'Video Berhasil Diedit']);
        }

        if(empty($request->file('konten'))) {

            $video = Video::find($id);
            $video->update([
                'judul_video' => $request->judul_video,
                'slug' => Str::slug($request->judul_video),
                'deskripsi_video' => $request->deskripsi_video,
                'playlist_id' => $request->playlist_id,
                'gambar_video' => $request->file('gambar_video')->store('video'),
            ]);
            return redirect('admin/video')->with(['success' => 'Video Berhasil Diedit']);
        }else {
            $video = Video::find($id);
            Storage::delete($video->konten);
            $video->update([
                'judul_video' => $request->judul_video,
                'slug' => Str::slug($request->judul_video),
                'deskripsi_video' => $request->deskripsi_video,
                'playlist_id' => $request->playlist_id,
                'konten' => $request->file('konten')->store('video'),
                'gambar_video' => $request->file('gambar_video')->store('video'),
            ]);
            return redirect('admin/video')->with(['success' => 'Video Berhasil Diedit']);
        }
    }

    public function destroy($id)
    {
        $video = Video::find($id);

        Storage::delete($video->gambar_video);
        Storage::delete($video->konten);
        $video->delete();

        return redirect('admin/video')->with(['success' => 'Video Berhasil Dihapus']);
    }
}
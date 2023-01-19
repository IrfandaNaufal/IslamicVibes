<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\Panduan;
use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $video = Video::all();
        $galeri = Galeri::all();
        $videoPilihan = Video::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('layouts.beranda', [
            'galeri' => $galeri,
            'video' => $video,
            'videoPilihan' => $videoPilihan,
        ]);
    }

    public function menuPanduan()
    {
        // $panduan = Panduan::all();
        $panduan = Panduan::simplepaginate(9);
        return view('layouts.includes.user.panduan.menu', [
            'panduan' => $panduan,
        ]);
    }

    public function detailPanduan($slug)
    {
        $panduan = Panduan::where('slug', $slug)->first();

        return view('layouts.includes.user.panduan.detail', [
            'panduan' =>$panduan,
        ]);
    }

    public function menuVideo()
    {
        $video = Video::orderBy('created_at', 'DESC')->simplepaginate(9);
        return view('layouts.includes.user.video.menu', [
            'video' => $video,
        ]);
    }

    public function detailVideo($slug)
    {
        $playlist = Playlist::all();
        $video = Video::where('slug', $slug)->first();
        $videoLainnya = Video::simplepaginate(4);
        // $videoLainnya = Video::all()->except($video->id);
        // $videoLainnya = Video::orderBy('created_at', 'DESC')->limit(3)->get();
        // $videoPlaylist = Video::orderBy('id', 'DESC')->get();

        return view('layouts.includes.user.video.detail', [
            'playlist' => $playlist,
            'video' =>$video,
            'videoLainnya' => $videoLainnya,
        ]);
    }

    public function menuBerita()
    {
        $berita = Berita::orderBy('created_at', 'DESC')->simplepaginate(5);
        return view('layouts.includes.user.berita.menu', [
            'berita' => $berita,
        ]);
    }

    public function detailBerita($slug)
    {
        $kategori = Kategori::all();
        $berita = Berita::where('slug', $slug)->first();
        $beritaLainnya = Berita::all()->except($berita->id);
        // $beritaLainnya = Berita::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('layouts.includes.user.berita.detail', [
            'berita' =>$berita,
            'kategori' => $kategori,
            'beritaLainnya' => $beritaLainnya,
        ]);
    }
}
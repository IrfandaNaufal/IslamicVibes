<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\Panduan;
use App\Models\Playlist;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $kategori = Kategori::count();
        $playlist = Playlist::count();
        $galeri = Galeri::count();
        $panduan = Panduan::count();
        $video = Video::count();
        $berita = Berita::count();
        return view('admin.dashboard', compact([
            'users', 'kategori', 'playlist', 'galeri', 'panduan', 'video', 'berita'
        ]));
    }
}
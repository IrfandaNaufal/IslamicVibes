<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $video = Video::all();
        $galeri = Galeri::all();
        $videoPilihan = Video::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('layouts.landingpage', [
            'galeri' => $galeri,
            'video' => $video,
            'videoPilihan' => $videoPilihan,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $fillable = [
        'judul_video', 'slug', 'gambar_video', 'konten', 'playlist_id', 'deskripsi_video', 'sumber_video'
    ];

    protected $hidden = [];

    public function playlist() {
        return $this->belongsTo(Playlist::class, 'playlist_id', 'id');
    }
}
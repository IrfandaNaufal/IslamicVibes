<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    use HasFactory;

    protected $table = 'panduan';

    protected $fillable = [
        'judul_panduan', 'slug', 'gambar_panduan', 'deskripsi_panduan', 'sumber_gambar'
    ];

    protected $hidden = [];
}

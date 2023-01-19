<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PanduanController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/panduan', [BerandaController::class, 'menuPanduan'])->name('menu-panduan');
Route::get('/panduan/detail/{slug}', [BerandaController::class, 'detailPanduan'])->name('detail-panduan');
Route::get('/video', [BerandaController::class, 'menuVideo'])->name('menu-video');
Route::get('/video/detail/{slug}', [BerandaController::class, 'detailVideo'])->name('detail-video');
Route::get('/berita', [BerandaController::class, 'menuBerita'])->name('menu-berita');
Route::get('/berita/detail/{slug}', [BerandaController::class, 'detailBerita'])->name('detail-berita');

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index']);

    // Kategori
    Route::controller(KategoriController::class)->group(function () {
        Route::get('/kategori', 'index');
        Route::get('/kategori/create', 'create');
        Route::post('/kategori', 'store');
        Route::get('/kategori/{id}/edit', 'edit');
        Route::put('/kategori/{id}', 'update');
        Route::get('/kategori/{id}', 'destroy');
    });

    // Playlist
    Route::controller(PlaylistController::class)->group(function () {
        Route::get('/playlist', 'index');
        Route::get('/playlist/create', 'create');
        Route::post('/playlist', 'store');
        Route::get('/playlist/{id}/edit', 'edit');
        Route::put('/playlist/{id}', 'update');
        Route::get('/playlist/{id}', 'destroy');
    });

    // Galeri
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/galeri', 'index');
        Route::get('/galeri/create', 'create');
        Route::post('/galeri', 'store');
        Route::get('/galeri/{id}/edit', 'edit');
        Route::put('/galeri/{id}', 'update');
        Route::get('/galeri/{id}', 'destroy');
    });

    // Panduan
    Route::controller(PanduanController::class)->group(function () {
        Route::get('/panduan', 'index');
        Route::get('/panduan/create', 'create');
        Route::post('/panduan', 'store');
        Route::get('/panduan/{id}/edit', 'edit');
        Route::put('/panduan/{id}', 'update');
        Route::get('/panduan/{id}', 'destroy');
    });

    // Video
    Route::controller(VideoController::class)->group(function () {
        Route::get('/video', 'index');
        Route::get('/video/create', 'create');
        Route::post('/video', 'store');
        Route::get('/video/{id}/edit', 'edit');
        Route::put('/video/{id}', 'update');
        Route::get('/video/{id}', 'destroy');
    });

    // Berita
    Route::controller(BeritaController::class)->group(function () {
        Route::get('/berita', 'index');
        Route::get('/berita/create', 'create');
        Route::post('/berita', 'store');
        Route::get('/berita/{id}/edit', 'edit');
        Route::put('/berita/{id}', 'update');
        Route::get('/berita/{id}', 'destroy');
    });
});
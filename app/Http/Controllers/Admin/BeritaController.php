<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.berita.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_berita' => 'required',
            'gambar_berita' => 'required',
            'isi_berita' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_berita);
        $data['gambar_berita'] = $request->file('gambar_berita')->store('berita');

        Berita::create($data);

        return redirect('admin/berita')->with(['success' => 'Berita Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        $kategori = Kategori::all();

        return view('admin.berita.edit', [
            'berita' => $berita,
            'kategori' => $kategori,
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_berita'))) {

            $berita = Berita::find($id);
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'isi_berita' => $request->isi_berita,
                'kategori_id' => $request->kategori_id,
            ]);
            return redirect('admin/berita')->with(['success' => 'Berita Berhasil Diubah']);
        }else {
            $berita = Berita::find($id);
            Storage::delete($berita->gambar_berita);
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'isi_berita' => $request->isi_berita,
                'kategori_id' => $request->kategori_id,
                'gambar_berita' => $request->file('gambar_berita')->store('berita'),
            ]);
            return redirect('admin/berita')->with(['success' => 'Berita Berhasil Diubah']);
        }
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);

        Storage::delete($berita->gambar_berita);
        $berita->delete();

        return redirect('admin/berita')->with(['success' => 'Berita Berhasil Dihapus']);
    }
}
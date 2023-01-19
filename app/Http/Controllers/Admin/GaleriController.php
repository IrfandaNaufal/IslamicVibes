<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_galeri' => 'required',
        ]);

        $data = $request->all();
        $data['gambar_galeri'] = $request->file('gambar_galeri')->store('galeri');

        Galeri::create($data);

        return redirect('admin/galeri')->with(['success' => 'Galeri Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view ('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        Storage::delete($galeri->gambar_galeri);
        $galeri->update([
            'gambar_galeri' => $request->file('gambar_galeri')->store('galeri'),
        ]);
        return redirect('admin/galeri')->with(['success' => 'Galeri Berhasil Diedit']);
    }

    public function destroy($id)
    {
        // $kategori = Kategori::where('id', $id)->delete();

        // return redirect('admin/kategori')->with(['success' => 'Kategori Berhasil Dihapus']);
        
        $galeri = Galeri::find($id);

        Storage::delete($galeri->gambar_galeri);
        $galeri->delete();

        return redirect('admin/galeri')->with(['success' => 'Galeri Berhasil Dihapus']);
    }
}
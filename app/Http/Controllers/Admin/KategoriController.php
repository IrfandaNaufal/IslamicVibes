<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return redirect('admin/kategori')->with(['success' => 'Kategori Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view ('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($data);

        return redirect('admin/kategori')->with(['success' => 'Kategori Berhasil Diubah']);
    }

    public function destroy($id)
    {
        $kategori = Kategori::where('id', $id)->delete();

        return redirect('admin/kategori')->with(['success' => 'Kategori Berhasil Dihapus']);
    }
}
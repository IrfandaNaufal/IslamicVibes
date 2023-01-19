<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Panduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PanduanController extends Controller
{
    public function index()
    {
        $panduan = Panduan::all();
        return view('admin.panduan.index', compact('panduan'));
    }

    public function create()
    {
        return view('admin.panduan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_panduan' => 'required',
            'gambar_panduan' => 'required',
            'deskripsi_panduan' => 'required',
            'sumber_gambar' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_panduan);
        $data['gambar_panduan'] = $request->file('gambar_panduan')->store('panduan');

        Panduan::create($data);

        return redirect('admin/panduan')->with(['success' => 'Panduan Berhasil Ditambahkan']);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $panduan = Panduan::find($id);

        return view('admin.panduan.edit', compact('panduan'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_panduan'))) {

            $panduan = Panduan::find($id);
            $panduan->update([
                'judul_panduan' => $request->judul_panduan,
                'slug' => Str::slug($request->judul_panduan),
                'deskripsi_panduan' => $request->deskripsi_panduan,
            ]);
            return redirect('admin/panduan')->with(['success' => 'Panduan Berhasil Diubah']);
        }else {
            $panduan = Panduan::find($id);
            Storage::delete($panduan->gambar_panduan);
            $panduan->update([
                'judul_panduan' => $request->judul_panduan,
                'slug' => Str::slug($request->judul_panduan),
                'deskripsi_panduan' => $request->deskripsi_panduan,
                'gambar_panduan' => $request->file('gambar_panduan')->store('panduan'),
            ]);
            return redirect('admin/panduan')->with(['success' => 'Panduan Berhasil Diubah']);
        }
    }

    public function destroy($id)
    {
        $panduan = Panduan::find($id);

        Storage::delete($panduan->gambar_panduan);
        $panduan->delete();

        return redirect('admin/panduan')->with(['success' => 'Panduan Berhasil Dihapus']);
    }
}
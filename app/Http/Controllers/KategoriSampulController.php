<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\KategoriSampul;
use Illuminate\Http\Request;

class KategoriSampulController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriSampul::orderBy('created_at', 'desc')->get();
        
        return view('admin.master.kategori.kategori', compact('kategori'));
    }

    public function createKategoriSampul()
    {
        $kategori = KategoriSampul::all();

        return view('admin.master.kategori.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'image_sampul' => 'required|mimes:jpg,png,jpeg,jfif',
        ], [
            'nama_kategori.required' => 'Nama Kategori tidak boleh kosong.',
            'image_sampul.required' => 'Foto Kategori tidak boleh kosong.',
            'image_sampul.mimes' => 'File harus jpg,jpeg,png',
        ]);

        $kategori = new KategoriSampul();

        $kategori->nama_kategori = $request->nama_kategori;
        $imagename = time() . '.' . $request->image_sampul->getClientOriginalExtension();
        $request->image_sampul->move('imagesSampul', $imagename);
        $kategori->image_sampul = $imagename;

        $kategori->save();
        return redirect('/kategori')->with('message', 'Kategori Berhasil diTambahkan');
    }

    public function updateKategoriSampul($id)
    {

        $kategori = KategoriSampul::findOrFail($id);

        return view('admin.master.kategori.update', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_kategori' => 'required',
                'image_sampul' => 'mimes:jpg,png,jpeg,jfif',
            ],
            [
                'nama_kategori.required' => 'Nama Jenis tidak boleh kosong.',
                'image_sampul.mimes' => 'File harus jpg,jpeg,png',
            ]
        );

        $kategori = KategoriSampul::find($id);

        $kategori->nama_kategori = $request->nama_kategori;
        if ($request->hasFile('image_sampul')) {
            $image_sampul = $request->file('image_sampul');
            $imageName = time() . '.' . $image_sampul->getClientOriginalExtension();
            $image_sampul->move('imagesSampul', $imageName);
            $kategori->image_sampul = $imageName;
        }

        $kategori->save();
        return redirect('/kategori')->with('message', 'Kategori Berhasil diEdit');
    }
    
    public function destroy($id)
    {
        $kategori = KategoriSampul::findOrFail($id);

        if ($kategori->fotos()->exists()) {
            return redirect('/kategori')->with('error', 'Kategori tidak dapat di  hapus karena sedang digunakan di foto ');
        }

        $kategori->delete();
        return redirect('/kategori')->with('message', 'Kategori Berhasil diHapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\KategoriSampul;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriSampul::all();
        $foto = Foto::with('kategori')->orderBy('created_at', 'desc')->get();

        return view('admin.master.foto.foto', compact('foto', 'kategori'));
    }

    public function createFoto()
    {
        $foto = Foto::all();
        $kategori = KategoriSampul::all();
        
        return view('admin.master.foto.create', compact('foto', 'kategori'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'judul_foto' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,jfif',
            'keterangan' => 'required',
            'tgl_foto' => 'required',
        ], [
            'id_kategori.required' => 'Kategori tidak boleh kosong.',
            'judul_foto.required' => 'Judul Jenis tidak boleh kosong.',
            'image.required' => 'Foto tidak boleh kosong.',
            'image.mimes' => 'File harus jpg,jpeg,png',
            'keterangan.required' => 'Keterangan tidak boleh kosong.',
            'tgl_foto.required' => 'Tanggal Acara tidak boleh kosong.',
        ]);

        $foto = new Foto();

        $foto->id_kategori = $request->id_kategori;
        $foto->judul_foto = $request->judul_foto;
        $foto->keterangan = $request->keterangan;
        $foto->tgl_foto = $request->tgl_foto;
        $imagename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('images', $imagename);
        $foto->image = $imagename;

        $foto->save();
        return redirect('/foto')->with('message', 'Foto Berhasil diTambahkan');
    }

    public function updateFoto($id)
    {
        $kategori = KategoriSampul::all();
        $foto = Foto::findOrFail($id);

        return view('admin.master.foto.update', compact('foto', 'kategori'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required',
            'judul_foto' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,jfif',
            'keterangan' => 'required',
            'tgl_foto' => 'required',
        ], [
            'id_kategori.required' => 'Kategori tidak boleh kosong.',
            'judul_foto.required' => 'Judul Jenis tidak boleh kosong.',
            'image.mimes' => 'File harus jpg,jpeg,png',
            'keterangan.required' => 'Keterangan tidak boleh kosong.',
            'tgl_foto.required' => 'Tanggal Acara tidak boleh kosong.',
        ]);

        $foto = Foto::find($id);

        $foto->id_kategori = $request->id_kategori;
        $foto->judul_foto = $request->judul_foto;
        $foto->keterangan = $request->keterangan;
        $foto->tgl_foto = $request->tgl_foto;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $imageName);
            $foto->image = $imageName;
        }

        $foto->save();
        return redirect('/foto')->with('message', 'Foto Berhasil di Edit');
    }

    public function destroy($id)
    {
        $foto = Foto::findOrFail($id);

        $foto->delete();
        return redirect('/foto')->with('message', 'Foto Berhasil diHapus');
    }
}

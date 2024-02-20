<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Foto;
use App\Models\Kategori;
use App\Models\KategoriSampul;

class AuthController extends Controller
{
    //
    // public function detailkategori()
    // {   $foto = Foto::all();
    //     $kategori = KategoriSampul::all();
    //     return view('detailkategori',compact(['foto','kategori']));
    // }
    public function detailkategori($id)
    {
        $kategori = KategoriSampul::findOrFail($id);
        $foto = Foto::where('id_kategori', $id)->get(); // Mengambil foto berdasarkan kategori_id
        return view('detailkategori', compact('foto', 'kategori'));
    }

    public function detailfoto($id)
    {
        $foto = Foto::findOrFail($id);

        $kategori = KategoriSampul::all();

        return view('detailfoto', compact('foto', 'kategori'));
    }

    public function index()
    {
        $foto = Foto::orderBy('created_at', 'desc')->paginate(4);
        $kategori = KategoriSampul::orderBy('created_at', 'desc')->get();

        return view('index', compact('foto', 'kategori'));
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.admin');
            } else {
                return redirect()->route('user.user');
            }
        }

        // Jika autentikasi gagal, cek jenis kesalahan dan redirect dengan pesan yang sesuai
        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            // Kesalahan pada password
            return redirect()->route('login')->withErrors(['password' => 'Salah Password.']);
        } elseif ($user && !Hash::check($credentials['password'], $user->password)) {
            // Kesalahan pada email
            return redirect()->route('login')->withErrors(['email' => 'Salah Email.']);
        } else {
            // Kesalahan keduanya
            return redirect()->route('login')->withErrors(['both' => 'Salah email and password.']);
        }
    }
    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();

        // Membersihkan data sesi
        session()->flush();

        // Diarahkan ke halaman login
        return redirect()->route('index');
    }
}

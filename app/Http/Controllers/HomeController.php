<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\KategoriSampul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     $data = array(
    //         'title' => 'Home Page'
    //     );
    //     return view('home',$data);
    // }
    public function index()
    {
        $role = Auth::user()->role;

        $foto = Foto::all();
        $kategori = KategoriSampul::all();

        if ($role === 'admin') {
            return view('admin.admin', compact('foto','kategori'));
        } elseif ($role === 'user') {
            return view('user.user');
        }

        // Jika peran tidak sesuai, Anda dapat menangani sesuai kebutuhan, contohnya:
        abort(403, 'Unauthorized action.'); // Tampilkan halaman error 403 (Forbidden)
    }
}

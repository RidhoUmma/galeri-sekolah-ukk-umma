<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\KategoriSampulController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
use App\Models\Foto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// // Route untuk proses login dan logout
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    // Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('detailkategori/{id}', [AuthController::class, 'detailkategori'])->name('detailkategori');

    Route::get('detailfoto/{id}', [AuthController::class, 'detailfoto'])->name('detailfoto');

    // Route::get('detailkategori', [AuthController::class, 'detailkategori'])->name('detailkategori');
});


Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Role admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.admin');
    // crud kategori
    Route::get('/kategori', [KategoriSampulController::class, 'index']);
    Route::get('/kategori/create/createKategoriSampul', [KategoriSampulController::class, 'createKategoriSampul']);
    Route::post('/kategori/store', [KategoriSampulController::class, 'store']);
    Route::get('/kategori/updateKategoriSampul/{id}', [KategoriSampulController::class, 'updateKategoriSampul']);
    Route::post('/kategori/update/{id}', [KategoriSampulController::class, 'update']);
    Route::get('/kategori/destroy/{id}', [KategoriSampulController::class, 'destroy']);
    // crud foto
    Route::get('/foto', [FotoController::class, 'index']);
    Route::get('/foto/createFoto', [FotoController::class, 'createFoto']);
    Route::post('/foto/store', [FotoController::class, 'store']);
    Route::get('/foto/updateFoto/{id}', [FotoController::class, 'updateFoto']);
    Route::post('/foto/update/{id}', [FotoController::class, 'update']);
    Route::get('/foto/destroy/{id}', [FotoController::class, 'destroy']);

    // profile
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/updateprofile/{id}', [UserController::class, 'updateprofile']);
    // ... tambahkan rute lain yang ingin Anda tentukan untuk peran admin di sini
});

// Role 
Route::group(['middleware' => ['auth', 'role:user,admin']], function () {

    Route::get('/user', [HomeController::class, 'index'])->name('user.user');
    // profile
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/updateprofile/{id}', [UserController::class, 'updateprofile']);

    // ... tambahkan rute lain yang ingin Anda tentukan untuk peran admin di sini
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pustakawan\PustakawanController;
use App\Http\Controllers\Anggota\AnggotaController;
use App\Http\Controllers\Pustakawan\KategoriController;
use App\Http\Controllers\Pustakawan\PenerbitController;
use App\Http\Controllers\Pustakawan\BukuController;
use App\Http\Controllers\Pustakawan\MemberController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', [HomeController::class, 'index'])->name('index');

require __DIR__.'/auth.php';

Route::middleware(['auth','checkRole:anggota'])->group(function () {
    //Update Profile Anggota
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Dashboard Anggota
    Route::get('/dashboard', [AnggotaController::class, 'dashboard'])->name('anggota.dashboard');
    Route::get('/anggota/home', [AnggotaController::class, 'home'])->name('anggota.home');
    Route::get('/anggota/buku', [AnggotaController::class,'buku'])->name('anggota.buku');
    //Peminjaman Buku
    Route::get('anggota/tambah', [AnggotaController::class,'tambah'])->name('anggota.tambah');
    Route::post('anggota/store', [AnggotaController::class,'store'])->name('anggota.store');
    //Riwayat Peminjaman Buku
    Route::get('anggota/detail', [AnggotaController::class,'detail'])->name('anggota.detail');
});

Route::middleware(['auth','checkRole:pustakawan'])->group(function () {
    Route::get('/pustakawan/dashboard', [PustakawanController::class, 'dashboard'])->name('pustakawan.dashboard');
    //Update Profile Pustakawan
    Route::get('/pustakawan/profile', [PustakawanController::class, 'edit'])->name('pustakawan.edit');
    Route::patch('/pustakawan/profile', [PustakawanController::class, 'update'])->name('pustakawan.update');
    Route::delete('/pustakawan/profile', [PustakawanController::class, 'destroy'])->name('pustakawan.destroy');
    //Katgori
    Route::get('/pustakawan/kategori', [KategoriController::class,'index'])->name('pustakawan.kategori');
    Route::get('/pustakawan/kategori/tambah', [KategoriController::class,'tambah'])->name('kategori.tambah');
    Route::post('/pustakawan/kategori/store', [KategoriController::class,'store'])->name('kategori.store');
    Route::get('/pustakawan/kategori/edit/{id}', [KategoriController::class,'edit'])->name('kategori.edit');
    Route::post('/pustakawan/kategori/update', [KategoriController::class,'update'])->name('kategori.update');
    Route::get('/pustakawan/kategori/hapus/{id}', [KategoriController::class,'hapus'])->name('kategori.hapus');
    //Penerbit
    Route::get('/pustakawan/penerbit', [PenerbitController::class,'index'])->name('pustakawan.penerbit');
    Route::get('/pustakawan/penerbit/tambah', [PenerbitController::class,'tambah'])->name('penerbit.tambah');
    Route::post('/pustakawan/penerbit/store', [PenerbitController::class,'store'])->name('penerbit.store');
    Route::get('/pustakawan/penerbit/edit/{id}', [PenerbitController::class,'edit'])->name('penerbit.edit');
    Route::post('/pustakawan/penerbit/update', [PenerbitController::class,'update'])->name('penerbit.update');
    Route::get('/pustakawan/penerbit/hapus/{id}', [PenerbitController::class,'hapus'])->name('penerbit.hapus');
    //Buku
    Route::get('/pustakawan/buku', [BukuController::class,'index'])->name('pustakawan.buku');
    Route::get('/pustakawan/buku/tambah', [BukuController::class,'tambah'])->name('buku.tambah');
    Route::post('/pustakawan/buku/store', [BukuController::class,'store'])->name('buku.store');
    Route::get('/pustakawan/buku/edit/{id}', [BukuController::class,'edit'])->name('buku.edit');
    Route::post('/pustakawan/buku/update', [BukuController::class,'update'])->name('buku.update');
    Route::get('/pustakawan/buku/hapus/{id}', [BukuController::class,'hapus'])->name('buku.hapus');
    //Anggota
    Route::get('/pustakawan/anggota', [MemberController::class,'index'])->name('pustakawan.anggota');
    Route::get('/pustakawan/anggota/tambah', [MemberController::class,'tambah'])->name('anggota.tambah');
    Route::post('/pustakawan/anggota/store', [MemberController::class,'store'])->name('anggota.store');
    Route::get('/pustakawan/anggota/edit/{id}', [MemberController::class,'edit'])->name('anggota.edit');
    Route::get('/pustakawan/anggota/detail/{id}', [MemberController::class,'detail'])->name('anggota.detail');
    Route::post('/pustakawan/anggota/update', [MemberController::class,'update'])->name('anggota.update');
    Route::get('/pustakawan/anggota/hapus/{id}', [MemberController::class,'hapus'])->name('anggota.hapus');
});



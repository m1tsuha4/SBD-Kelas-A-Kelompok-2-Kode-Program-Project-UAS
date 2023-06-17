<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pustakawan\PustakawanController;
use App\Http\Controllers\Anggota\AnggotaController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::middleware('auth:librarian')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//Route::get('anggota', function () { return view('anggota.dashboard'); })->middleware('checkRole:anggota');
Route::middleware(['auth','checkRole:anggota'])->group(function () {
    Route::get('/dashboard', [AnggotaController::class, 'dashboard'])->name('anggota.dashboard');
});
Route::middleware(['auth','checkRole:pustakawan'])->group(function () {
    Route::get('/dashboard/pustakawan', [PustakawanController::class, 'dashboard'])->name('pustakawan.dashboard');
});

require __DIR__.'/auth.php';

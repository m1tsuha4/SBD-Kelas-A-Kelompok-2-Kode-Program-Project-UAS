<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AnggotaController extends Controller
{
    public function dashboard(): View
    {
        return view('anggota.dashboard');
    }
    public function buku(){
        $buku = DB::table('buku')->get();
        return view('anggota.buku.buku',['buku'=>$buku]);
    }
}

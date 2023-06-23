<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AnggotaController extends Controller
{
    public function dashboard(): View
    {
        return view('anggota.dashboard');
    }
    public function home(): View
    {
        $idUser = Auth::id();
        $anggota = DB::table('anggota')->where('user_id',$idUser)->get();
        return view('anggota.home',compact('anggota'));
    }
    public function buku(){
        $buku = DB::table('buku')->get();
        return view('anggota.buku.buku',['buku'=>$buku]);
    }
    public function tambah(){
        $pustakawan = DB::table('pustakawan')->get();
        return view('anggota.buku.tambah',['pustakawan'=>$pustakawan]);
    }
    public function store(Request $request)
    {
        $idUser = Auth::id();
        $id_agt = DB::table('anggota')->where('user_id',$idUser)->value('id');
        $tanggalPeminjaman = $request->input('tanggal_peminjaman');
        $tanggalBatas = Carbon::parse($tanggalPeminjaman)->addDays(7);
        $tanggalBatasFormatted = $tanggalBatas->format('Y-m-d');
        DB::table('peminjaman')->insert([
            'id_agt' => $id_agt,
            'kd_exmp' => $request->kd_exmp,
            'tanggal_peminjaman' => $tanggalPeminjaman,
            'tanggal_batas' => $tanggalBatasFormatted,
            'id_ptkw' => $request->id_ptkw,
        ]);
        return redirect('/anggota/buku');
    }
    public function edit($id)
    {
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman',$id)->get();
        return view('pustakawan.anggota.edit',['peminjaman'=>$peminjaman]);
    }
    public function update(Request $request)
    {
        DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->update([
            'tanggal_pengembalian'=>$request->tanggal_pengembalian,
            'status_pengembalian'=>$request->status_pengembalian,
        ]);
        return redirect('/pustakawan/anggota');
    }
    public function detail(){
        $idUser = Auth::id();
        $id_agt = DB::table('anggota')->where('user_id',$idUser)->value('id');
        $peminjaman = DB::table('peminjaman')
            ->join('buku', 'peminjaman.kd_exmp', '=', 'buku.kd_exmp')
            ->where('peminjaman.id_agt', $id_agt)
            ->select('peminjaman.*', 'buku.judul')
            ->get();
        return view('anggota.buku.detail',['peminjaman'=>$peminjaman]);
    }
}

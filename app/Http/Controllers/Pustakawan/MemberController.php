<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->get();
        return view('pustakawan.anggota.anggota',['anggota'=>$anggota]);
    }
    public function detail($id){
//        $peminjaman = DB::table('peminjaman')->where('id_agt',$id)->get();
//        $buku = DB::table('buku')->get();
        $peminjaman = DB::table('peminjaman')
            ->join('buku', 'peminjaman.kd_exmp', '=', 'buku.kd_exmp')
            ->join('anggota', 'peminjaman.id_agt', '=', 'anggota.id')
            ->where('peminjaman.id_agt', $id)
            ->select('peminjaman.*', 'buku.judul','anggota.nama_anggota')
            ->get();
        return view('pustakawan.anggota.detail',['peminjaman'=>$peminjaman]);
    }
//    public function tambah(){
//        $penerbit = Penerbit::all();
//        $kategori = Kategori::all();
//        return view('pustakawan.buku.tambah',compact('penerbit'),compact('kategori'));
//    }
//    public function store(Request $request)
//    {
//        DB::table('buku')->insert([
//            'isbn'=>$request->isbn,
//            'judul'=>$request->judul,
//            'penulis'=>$request->penulis,
//            'tahun_terbit'=>$request->tahun_terbit,
//            'jumlah_stock'=>$request->jumlah_stock,
//            'jumlah_terpinjam'=>$request->jumlah_terpinjam,
//            'id_pnb'=>$request->id_pnb,
//            'id_kategori'=>$request->id_kategori,
//        ]);
//        return redirect('/pustakawan/buku');
//    }
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
    public function hapus($id)
    {
        DB::table('peminjaman')->where('id_peminjaman',$id)->delete();
        return redirect('/pustakawan/anggota');
    }
}

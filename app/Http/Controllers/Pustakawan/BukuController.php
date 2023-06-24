<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penerbit;
use App\Models\Kategori;

class BukuController extends Controller
{
    public function index(){
        $buku = DB::table('buku')->get();
        return view('pustakawan.buku.buku',['buku'=>$buku]);
    }
    public function tambah(){
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('pustakawan.buku.tambah',compact('penerbit'),compact('kategori'));
    }
    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'isbn'=>$request->isbn,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun_terbit'=>$request->tahun_terbit,
            'id_pnb'=>$request->id_pnb,
            'id_kategori'=>$request->id_kategori,
        ]);
        return redirect('/pustakawan/buku');
    }
    public function edit($id)
    {
        $buku = DB::table('buku')->where('kd_exmp',$id)->get();
        $penerbit = DB::table('penerbit')->get();
        $kategori = DB::table('kategori')->get();
        return view('pustakawan.buku.edit',['buku'=>$buku,'penerbit'=>$penerbit,'kategori'=>$kategori]);
    }
    public function update(Request $request)
    {
        DB::table('buku')->where('kd_exmp',$request->kd_exmp)->update([
            'isbn'=>$request->isbn,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun_terbit'=>$request->tahun_terbit,
            'id_pnb'=>$request->id_pnb,
            'id_kategori'=>$request->id_kategori,
        ]);
        return redirect('/pustakawan/buku');
    }
    public function hapus($id)
    {
        DB::table('buku')->where('kd_exmp',$id)->delete();
        return redirect('/pustakawan/buku');
    }
}

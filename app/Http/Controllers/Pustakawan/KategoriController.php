<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class KategoriController extends Controller
{
    public function index(){
        $kategori = DB::table('kategori')->get();
        return view('pustakawan.kategori.kategori',['kategori'=>$kategori]);
    }
    public function tambah(){
        return view('pustakawan.kategori.tambah');
    }
    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect('/pustakawan/kategori');
    }
    public function edit($id)
    {
        $kategori  = DB::table('kategori')->where('id_kategori',$id)->get();
        return view('pustakawan.kategori.edit',['kategori'=>$kategori]);
    }
    public function update(Request $request)
    {
        DB::table('kategori')->where('id_kategori',$request->id_kategori)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('/pustakawan/kategori');
    }
    public function hapus($id)
    {
        DB::table('kategori')->where('id_kategori',$id)->delete();
        return redirect('/pustakawan/kategori');
    }
}

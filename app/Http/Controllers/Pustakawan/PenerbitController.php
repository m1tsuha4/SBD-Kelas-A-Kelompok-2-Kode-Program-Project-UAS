<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerbitController extends Controller
{
    public function index(){
        $penerbit = DB::table('penerbit')->get();
        return view('pustakawan.penerbit.penerbit',['penerbit'=>$penerbit]);
    }
    public function tambah(){
        return view('pustakawan.penerbit.tambah');
    }
    public function store(Request $request)
    {
        DB::table('penerbit')->insert([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'email'=>$request->email,
        ]);
        return redirect('/pustakawan/penerbit');
    }
    public function edit($id)
    {
        $penerbit = DB::table('penerbit')->where('id_pnb',$id)->get();
        return view('pustakawan.penerbit.edit',['penerbit'=>$penerbit]);
    }
    public function update(Request $request)
    {
        DB::table('penerbit')->where('id_pnb',$request->id_pnb)->update([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'email'=>$request->email,
        ]);
        return redirect('/pustakawan/penerbit');
    }
    public function hapus($id)
    {
        DB::table('penerbit')->where('id_pnb',$id)->delete();
        return redirect('/pustakawan/penerbit');
    }
}

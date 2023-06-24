<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('index', compact('kategori'));
    }
}

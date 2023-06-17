<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PustakawanController extends Controller
{
    public function dashboard(): View
    {
        return view('pustakawan.dashboard');
    }
}

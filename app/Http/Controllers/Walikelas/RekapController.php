<?php

namespace App\Http\Controllers\Walikelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RekapController extends Controller
{
    
    public function rekapEkskul()
    {
        $kelas = Auth::user()->guru->walikelas()->first();
        return view('walikelas.rekap-nilai.ekskul', compact('kelas'));
    }
}

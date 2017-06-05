<?php

namespace App\Http\Controllers\Walikelas;

use App\Http\Controllers\Controller;
use App\Models\IdentitasSekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RaporController extends Controller
{
    public function index()
    {
        $kelas = Auth::user()->guru->walikelas()->first();
        return view('walikelas.rapor.index',compact('kelas'));
    }

    public function sampul($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('walikelas.rapor.sampul', compact('siswa'));
    }

    public function identitasSekolah()
    {
//        $datas = IdentitasSekolah::all();
          return view('walikelas.rapor.identitas-sekolah');
    }

    public function petunjuk()
    {
        return view('walikelas.rapor.petunjuk');
    }

    public function biodataSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('walikelas.rapor.biodata-siswa', compact('siswa'));
    }

    public function raporSmtSatu($id)
    {
        
    }

    public function raporSmtDua($id)
    {
        
    }
    
}

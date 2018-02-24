<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{

    public function pengetahuan(Kelas $kelas)
    {
        return view('guru.nilai.pengetahuan', compact('kelas'));
    }

    public function nilaiPengetahuan(Kelas $kelas)
    {
        return $kelas->siswa()->with(['nilai' => function ($query) {
            $query->where('nilai.guru_id', auth()->user()->guru->id);
        }])->get();
    }

    public function keterampilan($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('guru.nilai.keterampilan', compact('kelas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hph()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = auth()->user()->guru;

        $nilai = Nilai::lastPeriode()->where('guru_id',$guru->id)
            ->where('siswa_nis',$request->siswa_nis)
            ->where('jenis_nilai_id',$request->jenis_nilai_id)
            ->where('mapel_id', $guru->mapel_id);
        if ($request->jenis_nilai_id == 1 OR $request->jenis_nilai_id == 4 OR $request->jenis_nilai_id == 5 OR $request->jenis_nilai_id == 6){
            if ($nilai->count() == $request->ke - 1){
                $data = $request->all();
                $periode = Periode::orderBy('id','desc')->first();
                $data['periode_id'] = $periode->id;
                $data['guru_id'] = $guru->id;
                $data['mapel_id'] = $guru->mapel_id;
                Nilai::create($data);
            } else {
                $nilai = $nilai->get()[$request->ke -1];
                $nilai->nilai = $request->nilai;
                $nilai->update();
            }
        } else {
            if ($nilai->count() == 0){
                $data = $request->all();
                $periode = Periode::orderBy('id','desc')->first();
                $data['periode_id'] = $periode->id;
                $data['guru_id'] = $guru->id;
                $data['mapel_id'] = $guru->mapel_id;
                Nilai::create($data);
            }else{
                $nilai = $nilai->first();
                $nilai->nilai = $request->nilai;
                $nilai->update();
            }
        }
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

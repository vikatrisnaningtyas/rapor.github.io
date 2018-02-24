<?php

namespace App\Http\Controllers\Walikelas;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;

class AbsensiController extends Controller
{
    public function absen(Request $request)
    {
        $periode = Periode::orderBy('id','desc')->first();
        $absen = Absensi::where('periode_id', $periode->id)->where('siswa_nis', $request->nis);
        if ($absen->count() > 0) 
        {
            $absen = $absen->first();
            if ($request->has('sakit')) 
            {
                $absen->sakit = $request->sakit;
            }
            if ($request->has('ijin'))
            {
                $absen->ijin = $request->ijin;
            }
            if ($request->has('alpha'))
            {
                $absen->alpha = $request->alpha;
            }
            $absen->update();
        } else {
            $absen = new Absensi();
            $absen->periode_id =  $periode->id;
            $absen->siswa_nis = $request->nis;
            if ($request->has('sakit'))
            {
                $absen->sakit = $request->sakit;
            }
            if ($request->has('ijin'))
            {
                $absen->ijin = $request->ijin;
            }
            if ($request->has('alpha'))
            {
                $absen->alpha = $request->alpha;
            }
            $absen->save();
        }

        return response()->json();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Auth::user()->guru->walikelas()->first();
        return view('walikelas.absensi.index',compact('kelas'));
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
        //
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

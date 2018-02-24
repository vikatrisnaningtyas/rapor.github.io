<?php

namespace App\Http\Controllers\GuruEkskul;

use App\Http\Controllers\Controller;
use App\Models\Ekskul;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class NilaiEkskulController extends Controller
{

    public function nilaiIndex()
    {
        $ekskuls = Auth::user()->guru->ekskul()->first();
        return view('guru-ekskul.nilai-ekskul.index', compact('ekskuls'));
    }

    public function nilai(Request $request)
    {
        $eskul =  Auth::user()->guru->ekskul()->first();
        $siswa = $eskul->siswa()->where('siswa_nis', $request->nis)->first();
        if ($request->has('nilai'))
        {
            $siswa->pivot->predikat = $request->nilai;
        }
        if ($request->has('deskripsi'))
        {
            $siswa->pivot->deskripsi = $request->deskripsi;
        }
        $siswa->pivot->update();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskul = Auth::user()->guru->ekskul()->first();
        return view('guru-ekskul.siswa-ekskul.index', compact('ekskul'));
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

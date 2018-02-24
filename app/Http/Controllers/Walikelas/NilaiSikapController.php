<?php

namespace App\Http\Controllers\Walikelas;

use App\Http\Controllers\Controller;
use App\Models\NilaiSikap;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class NilaiSikapController extends Controller
{

    public function nilai(Request $request)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai = NilaiSikap::where('periode_id', $periode->id)->where('siswa_nis', $request->nis);
        
        if ($nilai->count() > 0)
        {
            $nilai = $nilai->first();
            if ($request->has('sosial'))
            {
                $nilai->sosial = $request->sosial;
            }
            if ($request->has('des_sosial'))
            {
                $nilai->des_sosial = $request->des_sosial;
            }
            if ($request->has('spiritual'))
            {
                $nilai->spiritual = $request->spiritual;
            }
            if ($request->has('des_spiritual')) 
            {
                $nilai->des_spiritual = $request->des_spiritual;
            }
            $nilai->update();
        } 
        else 
        {
            $nilai = new NilaiSikap();
            $nilai->periode_id = $periode->id;
            $nilai->siswa_nis = $request->nis;
            if ($request->has('sosial'))
            {
                $nilai->sosial = $request->sosial;
            }
            if ($request->has('des_sosial'))
            {
                $nilai->des_sosial = $request->des_sosial;
            }
            if ($request->has('spiritual'))
            {
                $nilai->spiritual = $request->spiritual;
            }
            if ($request->has('des_spiritual'))
            {
                $nilai->des_spiritual = $request->des_spiritual;
            }
            $nilai->save();
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
        return view('walikelas.nilai-sikap.index',compact('kelas'));
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

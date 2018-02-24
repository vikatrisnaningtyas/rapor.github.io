<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisNilai;
use Illuminate\Http\Request;

use App\Http\Requests;

class JenisNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = JenisNilai::all();
        return view('admin.jenis-nilai.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis-nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'jenis_nilai' => 'required|unique:jenis_nilai',
            'ket' => 'required'
        ]);

        JenisNilai::create($request->all());
        \Flash::success($request->get('ket'). ' berhasil disimpan');
        return redirect()->route('jenis-nilai.index');
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
        $jenis = JenisNilai::findOrFail($id);
        return view('admin.jenis-nilai.edit', compact('jenis'));
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
        $jenis = JenisNilai::findOrFail($id);
        $this->validate($request, [
            'jenis_nilai' => 'required|unique:jenis_nilai',
            'ket' => 'required'
        ]);

        $jenis->update($request->all());
        \Flash::success($request->get('ket'). ' berhasil diupdate');
        return redirect()->route('jenis-nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisNilai::find($id)->delete();
        \Flash::success('Jenis nilai berhasil diupdate');
        return redirect()->route('jenis-nilai.index');
    }
}

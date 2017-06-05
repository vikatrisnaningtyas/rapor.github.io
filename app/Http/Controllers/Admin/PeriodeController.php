<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodes = Periode::all();
        return view('admin.periode.index', compact('periodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periode.create');
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
           'thn_akademik' => 'required|max:9'
        ]);

        Periode::create($request->all());
        \Flash::success('Tahun Akademik '. $request->get('thn_akademik') . ' berhasil disimpan');
        return redirect()->route('periode.index');
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
        $periode = Periode::findOrFail($id);
        return view('admin.periode.edit', compact('periode'));
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
        $periode = Periode::findOrFail($id);
        $this->validate($request, [
            'thn_akademik' => 'required|max:9'
        ]);

        $periode->update($request->all());
        \Flash::success($request->get('thn_akademik') . ' berhasi diupdate.');
        return redirect()->route('periode.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Periode::find($id)->delete();
        \Flash::success('Periode berhasil dihapus');
        return redirect()->route('periode.index');
    }
}

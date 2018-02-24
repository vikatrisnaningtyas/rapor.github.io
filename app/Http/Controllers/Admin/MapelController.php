<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

use App\Http\Requests;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapels = Mapel::with('guru')->get();
        return view('admin.mapel.index', compact('mapels'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mapel.create');
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
           'nama_mapel' => 'required|string|max:255|unique:mapel'
        ]);

        Mapel::create($request->all());
        \Flash::success($request->get('nama_mapel') . ' berhasil disimpan');
        return redirect()->route('mapel.index');
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
        $mapel = Mapel::findOrFail($id);
        return view('admin.mapel.edit', compact('mapel'));
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
        $mapel = Mapel::findOrFail($id);
        $this->validate($request, [
            'nama_mapel' => 'required|max:255|unique:mapel,nama_mapel,' . $mapel->id
        ]);

        $mapel->update($request->all());
        \Flash::success($request->get('nama_mapel') . ' berhasi diupdate.');
        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapel::find($id)->delete();
        \Flash::success('Mata Pelajaran Dihapus');
        return redirect()->route('mapel.index');
    }
}

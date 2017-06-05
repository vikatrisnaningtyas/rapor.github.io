<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekskul;
use App\Models\Guru;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskuls = \App\Models\Ekskul::all();
        return view('admin.ekskul.index', compact('ekskuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ekskul.create');
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
           'nama_ekskul' => 'required|max:255|unique:ekskul'
        ]);

        Ekskul::create($request->all());
        \Flash::success($request->get('nama_ekskul'). ' berhasil disimpan');
        return redirect(route('ekskul.index'));
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
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.edit', compact('ekskul'));
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
        $ekskul = Ekskul::findOrFail($id);
        $this->validate($request, [
           'nama_ekskul' => 'required|max:255|unique:ekskul'
        ]);

        $ekskul->update($request->all());
        \Flash::success($request->get('nama_ekskul') . ' berhasil diupdate');
        return redirect(route('ekskul.index'));
    }

    /**
     * Remove the specified resoeurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ekskul::find($id)->delete();
        \Flash::success('Ekstrakurikuler berhasil dihapus');
        return redirect(route('ekskul.index'));
    }

    public function ekskulSiswaIndex()
    {
        $ekskuls = Ekskul::all();
        return view('admin.ekskul.ekskul-siswa.index', compact('ekskuls'));
    }

    public function ekskulSiswaShow($id)
    {
        $periode = Periode::all();
        $ekskul = Ekskul::findOrFail($id);
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = Periode::orderBy('id','desc')->first()->id;
        }
        
        return view('admin.ekskul.ekskul-siswa.show', compact('ekskul', 'periode', 'p'));
    }

    public function ekskulGuruIndex()
    {
        $periode = Periode::all();
        $ekskuls = Ekskul::all();
        $current = Periode::orderBy('id','desc')->first()->id;
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = $current;
        }
        
        return view('admin.ekskul.ekskul-guru.index', compact('ekskuls', 'periode', 'p', 'current'));
    }

    public function ekskulGuruCreate()
    {
        return view('admin.ekskul.ekskul-guru.create');
    }
}

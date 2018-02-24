<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::get();
        return view('admin.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
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
            'nama_siswa' => 'required|string|max:255',
            'nisn' => 'required|numeric',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required',
            'status' => 'required'
        ]);

        //$input = $request->all();

        //$input['tgl_lahir'] = new  Carbon($input['tgl_lahir']);

        Siswa::create($request->all());
        \Flash::success($request->get('nama_siswa') . ' berhasil disimpan');
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
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
        $siswa = Siswa::findOrFail($id);
        $this->validate($request, [
            'nama_siswa' => 'required|string|max:255',
            'nisn' => 'max:15'
        ]);

        //$input = $request->all();

        $siswa->update($request->all());
        \Flash::success($request->get('nama_siswa') . ' berhasil diupdate');
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        \Flash::success('Siswa berhasil dihapus');
        return redirect()->route('siswa.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::with('mapel')->get();
        return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create');
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
           'nip' => 'unique:guru',
           'nama_guru' => 'required|string|max:255',
           'mapel_id' => 'exists:mapel,id'
        ]);
        $data = $request->all();
        $user = User::create($data);
        $data['user_id'] = $user->id;
        Guru::create($data);
        \Flash::success($request->get('nama_guru') . ' berhasil disimpan');
        return redirect()->route('guru.index');
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
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
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
        $guru = Guru::findorFail($id);
        $this->validate($request, [
           'nip' => 'unique:guru,nip,' . $guru->id,
           'nama_guru' => 'required|string|max:255',
           'mapel_id' => 'exists:mapel,id'
        ]);

        $guru->update($request->all());
        \Flash::success($request->get('nama_guru') . ' berhasil diupdate');
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();
        \Flash::success('Guru berhasil Dihapus');
        return redirect()->route('guru.index');
    }
}

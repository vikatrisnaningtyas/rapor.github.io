<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Periode;
use App\Models\Siswa;
use Illuminate\Http\Request;

use App\Http\Requests;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelases = Kelas::get();
        return view('admin.kelas.index', compact('kelases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.create');
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
           'nama_kelas' => 'required|string|max:255|unique:kelas'
        ]);

        Kelas::create($request->all());
        \Flash::success($request->get('nama_kelas') . ' berhasil disimpan');
        return redirect()->route('kelas.index');
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
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas'));
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
        $kelas = Kelas::findOrFail($id);
        $this->validate($request, [
           'nama_kelas' => 'required|string|max:255|unique:kelas,nama_kelas,' . $kelas->id
        ]);

        $kelas->update($request->all());
        \Flash::success($request->get('nama_kelas') . ' berhasil diedit');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        \Flash::success('Kelas berhasil dihapus');
        return redirect()->route('kelas.index');
    }

    public function walikelasIndex()
    {
        $periode = Periode::all();
        $kelases = Kelas::all();
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = Periode::orderBy('id','desc')->first()->id;
        }
        return view('admin.kelas.walikelas.index', compact('kelases', 'periode','p'));
    }

    public function walikelasCreate($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.walikelas.create', compact('kelas'));
    }

    public function walikelasStore(Request $request,$id)
    {
        $kelas = Kelas::findOrFail($id);
        $guru = Guru::findOrFail($request->guru_id);
        $periode = Periode::orderBy('id','desc')->first();
        $kelas->walikelas()->attach($guru,['periode_id' => $periode->id]);
        return redirect('/admin/kelas/walikelas');
    }

    public function guruKelasIndex()
    {
        $kelases = Kelas::all();
        return view('admin.kelas.gurukelas.index', compact('kelases'));
    }

    public function guruKelasShow(Kelas $kelas)
    {
        $periode = Periode::all();
        $current = Periode::orderBy('id','desc')->first()->id;
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = $current;
        }
        $guru = $kelas->gurukelas($p)->get();
        return view('admin.kelas.gurukelas.show', compact('kelas', 'guru', 'periode', 'p','current'));
    }

    public function guruKelasCreate($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.gurukelas.create', compact('kelas'));
    }

    public function guruKelasStore(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        foreach ($request->guru_id as $guru_id) {
            $guru = Guru::findOrFail($guru_id);
            try {
                $kelas->gurukelas()->attach($guru);
            } catch (\Exception $e) {

            }
        }
        return redirect('admin/kelas/gurukelas');
    }

    public function kelasSiswaIndex()
    {
        $kelas = Kelas::all();
        return view('admin.kelas.kelas-siswa.index', compact('kelas'));
    }

    public function kelasSiswaShow($id)
    {
        $periode = Periode::all();
        $kelas = Kelas::findOrFail($id);
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = Periode::orderBy('id','desc')->first()->id;
        }
        
        return view('admin.kelas.kelas-siswa.show', compact('kelas', 'periode', 'p'));
    }

    public function kelasSiswaCreate($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.kelas-siswa.create', compact('kelas'));
    }

    public function kelasSiswaStore(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $periode = Periode::orderBy('id','desc')->first();
        foreach ($request->nis as $nis) {
            $siswa = Siswa::findOrFail($nis);
            try {
                $kelas->siswa()->attach($siswa,['status' => 1, 'periode_id' => $periode->id]);
            } catch (\Exception $e) {
                return $e;
            }
        }
        return redirect('admin/kelas/kelas-siswa');
    }
}

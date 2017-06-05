<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bobot;
use App\Models\Kkm;
use App\Models\Mapel;
use App\Models\Periode;
use Illuminate\Http\Request;

use App\Http\Requests;

class KkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = Periode::all();
        $mapels = Mapel::all();
        $current = $current = Periode::orderBy('id','desc')->first()->id;
        if (isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = $current;
        }

        return view('admin.kkm.index', compact('mapels', 'periode', 'p', 'current'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kkm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $kkm = Kkm::where('periode_id', $periode->id)->where('mapel_id', $request->mapel_id);
        if($kkm->count() > 0)
        {
            $kkm = $kkm->first();
            if($request->has('kkm'))
            {
                $kkm->kkm = $request->kkm;
            }
            $kkm->update();
        }
        else
        {
            $kkm = new Kkm();
            $kkm->periode_id = $periode->id;
            $kkm->mapel_id = $request->mapel_id;
            if($request->has('kkm'))
            {
                $kkm->kkm = $request->kkm;
            }
            $kkm->save();
        }
        return response()->json();
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

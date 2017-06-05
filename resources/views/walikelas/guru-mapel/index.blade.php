@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Daftar Guru yang Mengajar</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <input type="button" onclick="printDiv('printableArea')" value="Print" />
                    <div id="printableArea">
                    <table class="table table-striped m-0">
                        <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($guru as $g)
                            <tr>
                                <td>{{ $g->mapel->nama_mapel }}</td>
                                <td>{{ $g->nama_guru }}</td>
                                <td>{{ $g->nip }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
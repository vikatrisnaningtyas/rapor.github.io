@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <table id="bobotTable" class="table table-striped m-b-0">
                            <thead>
                            <tr>
                                <th>Jenis Nilai</th>
                                <th>Keterangan</th>
                                <th>Bobot Nilai</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>HPTS</td>
                                <td>Hasil Penilaian Tengah Semester</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS/NISN</th>
                            <th>Nama Siswa</th>
                            <th>P/L</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($ekskul->siswa as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td>{{ $siswa->tgl_lahir}}</td>
                                <td>{{ $siswa->alamat_siswa }}</td>
                                <td>{{ $siswa->kelas[0]->nama_kelas }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
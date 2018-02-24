@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Daftar Siswa Kelas {{ $kelas->nama_kelas }}</h4>
@endsection

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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($kelas->siswa as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis .' / '. $siswa->nisn }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td>{{ $siswa->tgl_lahir}}</td>
                                <td>
                                    <a href="{{ route('data-siswa.show', $siswa->nis) }}" class="btn btn-xs btn-custom"><i class="fa fa-file-text-o"></i> Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
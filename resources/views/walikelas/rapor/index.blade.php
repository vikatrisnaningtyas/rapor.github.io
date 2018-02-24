@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Halaman Cetak Rapor Kelas {{ $kelas->nama_kelas }}</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <p>Tahun Pelajaran : 2015/2016</p>
                    <p>Semester : 1</p>
                    <table class="table table-striped table-bordered">
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
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Cetak Rapor <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('walikelas.rapor.sampul', $siswa->nis) }}">Sampul Rapor</a></li>
                                            <li><a href="{{ route('walikelas.rapor.biodata-siswa', $siswa->nis) }}">Biodata Siswa</a></li>
                                            <li><a href="">Rapor Capaian</a></li>
                                        </ul>
                                    </div>
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
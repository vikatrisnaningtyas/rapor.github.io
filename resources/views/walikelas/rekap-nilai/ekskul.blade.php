@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Rekap Nilai Ekstrakurikuler</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS/NISN</th>
                                <th>NAMA SISWA</th>
                                <th>P/L</th>
                                <th>Ekstrakurikuler</th>
                                <th>Predikat</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($noUrut = 1)
                        @foreach($kelas->siswa as $siswa)
                            @php($ekskuls = $siswa->ekskul)
                            @php($no = 0)
                            @foreach($ekskuls as $ekskul)
                            <tr>
                                @if($no++ == 0)
                                <td rowspan="{{$siswa->ekskul->count()}}">{{ $noUrut++ }}</td>
                                <td rowspan="{{$siswa->ekskul->count()}}">{{ $siswa->nis }}</td>
                                <td rowspan="{{$siswa->ekskul->count()}}">{{ $siswa->nama_siswa }}</td>
                                <td rowspan="{{$siswa->ekskul->count()}}">{{ $siswa->jenis_kelamin }}</td>
                                @endif
                                <td>{{ $ekskul->nama_ekskul }}</td>
                                <td>{{ $siswa->predikatEkskul($ekskul->id) }}</td>
                                <td>{{ $siswa->deskripsiEkskul($ekskul->id) }}</td>
                            </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
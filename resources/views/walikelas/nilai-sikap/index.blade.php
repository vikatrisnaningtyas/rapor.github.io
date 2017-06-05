@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Nilai Sikap dan Spiritual</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <h4 class="header-title m-t-0 m-b-30">Kelas : {{ $kelas->nama_kelas }} </h4>
                        <h4 class="header-title m-t-0 m-b-30">Tahun Akademik : 2015/2016</h4>
                        <h4 class="header-title m-t-0 m-b-30">Semester : 1</h4>
                        <table id="sikapTable" class="table table-bordered m-b-0">
                            <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIS/NISN</th>
                                <th rowspan="2">NAMA SISWA</th>
                                <th rowspan="2">L/P</th>
                                <th colspan="2">SIKAP SOSIAL</th>
                                <th colspan="2">SIKAP SPIRITUAL</th>
                            </tr>
                            <tr>
                                <th>PREDIKAT</th>
                                <th>DESKRIPSI</th>
                                <th>PREDIKAT</th>
                                <th>DESKRIPSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach($kelas->siswa as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis . ' / ' . $siswa->nisn }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td id="sosial{{$siswa->nis}}">{{ $siswa->sosial }}</td>
                                <td id="des_sosial{{$siswa->nis}}">{{ $siswa->des_sosial }}</td>
                                <td id="spiritual{{$siswa->nis}}">{{ $siswa->spiritual }}</td>
                                <td id="des_spiritual{{$siswa->nis}}">{{ $siswa->des_spiritual }}</td>
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

@section('script')
    <script>
        //Walikelas - Nilai Sikap dan Spiriitual
        $('#sikapTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2, 3, 4]
        });
        $('#sikapTable td').on('change', function (evt, newValue) {
            // do something with the new cell value
            var id = evt.target.id;
            console.log(newValue);
            if(id.substring(0,6) == 'sosial') {
                $.post(
                        "/walikelas/nilai-sikap/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(6),
                            'sosial' : newValue
                        },
                        function (data) {

                        });
            }
            if(id.substring(0,10) == 'des_sosial') {
                $.post(
                        "/walikelas/nilai-sikap/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(10),
                            'des_sosial' : newValue
                        },
                        function (data) {

                        });
            }
            if(id.substring(0,9) == 'spiritual') {
                $.post(
                        "/walikelas/nilai-sikap/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(9),
                            'spiritual' : newValue
                        },
                        function (data) {

                        });
            }
            if(id.substring(0,13) == 'des_spiritual') {
                $.post(
                        "/walikelas/nilai-sikap/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(13),
                            'des_spiritual' : newValue
                        },
                        function (data) {

                        });
            }
        });
    </script>
@endsection
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <h4 class="header-title m-t-0 m-b-30">Kelas : {{ $kelas->nama_kelas }} </h4>
                        <br/>
                        <table id="absenTable" class="table table-striped m-b-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS/NISN</th>
                                <th>Nama Siswa</th>
                                <th>Sakit</th>
                                <th>Ijin</th>
                                <th>Tanpa Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach($kelas->siswa as $siswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->nis . ' / ' . $siswa->nisn}}</td>
                                    <td class="nama">{{$siswa->nama_siswa}}</td>
                                    <td id="sakit{{$siswa->nis}}">{{$siswa->sakit}}</td>
                                    <td id="ijin{{$siswa->nis}}">{{$siswa->ijin}}</td>
                                    <td id="alpha{{$siswa->nis}}">{{$siswa->alpha}}</td>
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
        //Walikelas - Absensi
        $('#absenTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2, 3]
        }).numericInputExample();
        $('#absenTable td').on('change', function (evt, newValue) {
            // do something with the new cell value
            var id = evt.target.id;
            console.log(newValue);
            if (id.substring(0, 5) == 'sakit') {
                $.post(
                        "/walikelas/absensi/absen", {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            'nis': id.substring(5),
                            'sakit': newValue
                        },
                        function (data) {

                        });
            }
            if (id.substring(0, 4) == 'ijin') {
                $.post(
                        "/walikelas/absensi/absen", {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            'nis': id.substring(4),
                            'ijin': newValue
                        },
                        function (data) {

                        });
            }
            if (id.substring(0, 5) == 'alpha') {
                $.post(
                        "/walikelas/absensi/absen", {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            'nis': id.substring(5),
                            'alpha': newValue
                        },
                        function (data) {

                        });
            }
        });
    </script>
@endsection
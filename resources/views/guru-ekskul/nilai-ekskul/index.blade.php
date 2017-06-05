@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <table id="ekskulTable" class="table table-bordered table-striped m-b-0">
                            <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIS/NISN</th>
                                <th rowspan="2">NAMA SISWA</th>
                                <th rowspan="2">L/P</th>
                                <th colspan="2">NILAI EKSTRAKURIKULER</th>
                            </tr>
                            <tr>
                                <th>NILAI</th>
                                <th>DESKRIPSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach($ekskuls->siswa as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis .'/' . $siswa->nisn }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td id="nilai{{$siswa->nis}}">{{ $siswa->predikatEkskul($ekskuls->id) }}</td>
                                <td id="deskripsi{{$siswa->nis}}">{{ $siswa->deskripsiEkskul($ekskuls->id) }}</td>
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
        //Guru Ekskul - Nilai Ekskul
        $('#ekskulTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2, 3, 4]
        });
        $('#ekskulTable td').on('change', function (evt, newValue) {
            // do something with the new cell value
            var id = evt.target.id;
            console.log(newValue);

            if(id.substring(0,5) == 'nilai') {
                $.post(
                        "/guru-ekskul/nilai-ekskul/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(5),
                            'nilai' : newValue
                        },
                        function (data) {

                        });
            }
            if(id.substring(0,9) == 'deskripsi') {
                $.post(
                        "/guru-ekskul/nilai-ekskul/nilai", {
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                            'nis' : id.substring(9),
                            'deskripsi' : newValue
                        },
                        function (data) {

                        });
            }
        });
    </script>
@endsection
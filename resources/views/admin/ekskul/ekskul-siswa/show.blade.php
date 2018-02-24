@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-inline">
                                <label for="periode" class="">Periode   </label>
                                <select name="" id="periode" class="form-control select">
                                    <option value="">Pilih periode</option>
                                    @foreach($periode as $pr)
                                        <option value="{{$pr->id}}">{{$pr->thn_akademik. ' - Semester ' . $pr->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <h5 class="m-t-30"></h5>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS/NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($ekskul->siswa($p)->get() as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis.' / '. $siswa->nisn }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#periode').change(function () {
            window.location.replace("/admin/ekskul/ekskul-siswa/{{$ekskul->id}}/show?p=" + $('#periode').val());
        });
    </script>
@endsection
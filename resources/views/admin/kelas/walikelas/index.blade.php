@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-inline">
                                <label for="periode" class="">Periode </label>
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
                            <th>No.</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($kelases as $kelas)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $kelas->nama_kelas }}</td>
                                <td>
                                    {!! ($kelas->walikelas($p)->count() > 0) ? $kelas->waliKelas($p)->first()->nama_guru : '<p class="text-danger">Wali Kelas Belum Diinputkan.</p><a href="/admin/kelas/walikelas/'.$kelas->id.'/create" class="btn btn-sm btn-success">Input Wali Kelas</a>' !!}
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

@section('script')
    <script>
        $('#periode').change(function () {
            window.location.replace("/admin/kelas/walikelas?p=" + $('#periode').val());
        });
    </script>
@endsection
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
                    <table id="kkmTable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($mapels as $mapel)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $mapel->nama_mapel }}</td>
                            <td id="kkm{{ $mapel->id }}">{{($mapel->kkm($p)->count() > 0) ?$mapel->kkm($p)->first()->kkm : ''}}</td>
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
            window.location.replace("/admin/kkm?p=" + $('#periode').val());
        });

        //Admin - KKM
        $('#kkmTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2]
        }).numericInputExample();
        $('#kkmTable td').on('change', function (evt, newValue) {
            // do something with the new cell value
            var id = evt.target.id;
            console.log(newValue);
            if(id.substring(0, 3) == 'kkm') {
                $.post(
                        "/admin/kkm", {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            'mapel_id': id.substring(3),
                            'kkm': newValue
                        },
                        function (data) {

                        });
            }
        });
    </script>
@endsection
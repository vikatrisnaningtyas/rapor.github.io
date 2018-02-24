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
                    @if($p == $current)
                        <a href="/admin/kelas/gurukelas/{{$kelas->id}}/create" class="btn btn-primary">Tambah</a>
                    @endif
                    <table class="table table-striped m-0">
                        <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Guru</th>
                            <th>NIP</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($guru as $g)
                            <tr>
                                <td>{{ $g->mapel->nama_mapel }}</td>
                                <td>{{ $g->nama_guru }}</td>
                                <td>{{ $g->nip }}</td>
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
            window.location.replace("/admin/kelas/gurukelas/{{$kelas->id}}/show?p=" + $('#periode').val());
        });
    </script>
@endsection
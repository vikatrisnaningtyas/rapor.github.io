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
                    @if ($current == $p)
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('admin.ekskul.ekskul-guru.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Guru Pembimbing <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Ekstrakurikuler</th>
                            <th>Jml. Siswa</th>
                            <th>Guru Pembimbing</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($ekskuls as $ekskul)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $ekskul->nama_ekskul }}</td>
                                <td>{{ $ekskul->siswa($p)->get()->count() }}</td>
                                <td>
                                    {!! ($ekskul->guru($p)->count() > 0) ? $ekskul->guru($p)->first()->nama_guru : '<p class="text-success">Data belum diinputkan.</p>' !!}
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
            window.location.replace("/admin/ekskul/ekskul-guru?p=" + $('#periode').val());
        });
    </script>
@endsection
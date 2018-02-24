@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('mapel.create') }}" class="btn btn-primary waves-effect waves-light">Tambah
                                    Mata Pelajaran <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Kelompok</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mapels as $mapel)
                            <tr>
                                <td>{{ $mapel->nama_mapel }}</td>
                                <td>Kelompok {{ $mapel->kelompok }}</td>
                                <td>
                                    <a href="{{ route('mapel.edit', $mapel->id) }}" class="btn btn-xs btn-success"><i
                                                class="fa fa-edit"></i> Edit</a>
                                    @if(!$mapel->guru->count())
                                        <a href="#" class="btn btn-xs btn-danger"
                                           onclick="$('#form-delete-{{ $mapel->id }}').submit()"><i
                                                    class="fa fa-trash-o"></i> Delete</a>
                                        {!! Form::model($mapels, ['route' => ['mapel.destroy', $mapel], 'method' => 'delete', 'class' => 'form-inline', 'id' => 'form-delete-'.$mapel->id]) !!}
                                        {!! Form::close() !!}
                                    @endif
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
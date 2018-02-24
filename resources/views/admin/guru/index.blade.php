@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('guru.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Guru <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Mengajar Mapel</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gurus as $guru)
                            <tr>
                                <td>{{ $guru->nama_guru }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->mapel->nama_mapel }}</td>
                                <td>
                                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    @if(!$guru->walikelas->count())
                                        <a href="#" class="btn btn-xs btn-danger"
                                           onclick="$('#form-delete-{{ $guru->id }}').submit()"><i
                                                    class="fa fa-trash-o"></i> Delete</a>
                                        {!! Form::model($gurus, ['route' => ['guru.destroy', $guru], 'method' => 'delete', 'class' => 'form-inline', 'id' => 'form-delete-'.$guru->id]) !!}
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
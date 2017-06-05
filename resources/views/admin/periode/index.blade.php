@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Halaman Periode</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('periode.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Periode <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($periodes as $periode)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $periode->thn_akademik }}</td>
                                <td>{{ $periode->semester }}</td>
                                <td>
                                    <a href="{{ route('periode.edit', $periode->id) }}" class="btn btn-xs btn-success"><i
                                                class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-xs btn-danger"
                                       onclick="$('#form-delete-{{ $periode->id }}').submit()"><i
                                                class="fa fa-trash-o"></i> Delete</a>
                                    {!! Form::model($periodes, ['route' => ['periode.destroy', $periode], 'method' => 'delete', 'class' => 'form-inline', 'id' => 'form-delete-'.$periode->id]) !!}
                                    {!! Form::close() !!}
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
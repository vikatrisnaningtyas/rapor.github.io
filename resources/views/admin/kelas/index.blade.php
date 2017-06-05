@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('kelas.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Kelas <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Grade</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kelases as $kelas)
                            <tr>
                                <td>{{ $kelas->nama_kelas }}</td>
                                <td>{{ $kelas->grade }}</td>
                                <td>
                                    {!! Form::model($kelases, ['route' => ['kelas.destroy', $kelas], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    {!! Form::button('<i class="fa fa-trash-o"></i> Delete', ['class' => 'btn btn-xs btn-danger js-submit-confirm', 'type' => 'submit']) !!}
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
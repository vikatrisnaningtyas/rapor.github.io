@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('ekskul.create') }}" class="btn btn-primary waves-effect waves-light">Tambah Ekstrakurikuler  <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nama Ekskul</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ekskuls as $ekskul)
                            <tr>
                                <td>{{ $ekskul->nama_ekskul }}</td>
                                <td>
                                    {!! Form::model($ekskuls, ['route' => ['ekskul.destroy', $ekskul], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('ekskul.edit', $ekskul->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    {!! Form::button('<i class="fa fa-trash-o"></i> Delete', ['class' => 'btn btn-xs btn-danger', 'type' => 'submit']) !!}
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
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('jenis-nilai.create') }}"
                                   class="btn btn-primary waves-effect waves-light">Tambah
                                    Jenis Nilai <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Aspek Penilaian</th>
                            <th>Jenis Nilai</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($jenis as $jn)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $jn->aspek }}</td>
                                <td>{{ $jn->jenis_nilai }}</td>
                                <td>{{ $jn->ket }}</td>
                                <td>
                                    <a href="{{ route('jenis-nilai.edit', $jn->id) }}" class="btn btn-xs btn-success"><i
                                                class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-xs btn-danger"
                                       onclick="$('#form-delete-{{ $jn->id }}').submit()"><i
                                                class="fa fa-trash-o"></i> Delete</a>
                                    {!! Form::model($jenis, ['route' => ['jenis-nilai.destroy', $jn], 'method' => 'delete', 'class' => 'form-inline', 'id' => 'form-delete-'.$jn->id]) !!}
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
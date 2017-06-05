@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="{{ route('siswa.create') }}" class="btn btn-primary waves-effect waves-light">Tambah
                                    Siswa <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nomor Induk Siswa</th>
                            <th>Nama Siswa</th>
                            <th>P/L</th>
                            <th>Tanggal Lahir</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td>{{ $siswa->tgl_lahir}}</td>
                                <td>
                                    {!! Form::model($siswas, ['route' => ['siswa.destroy', $siswa], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('siswa.show', $siswa->nis) }}" class="btn btn-xs btn-custom"><i class="fa fa-file-text-o"></i> Detail</a>
                                    <a href="{{ route('siswa.edit', $siswa->nis) }}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
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
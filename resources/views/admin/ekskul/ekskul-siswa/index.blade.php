@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
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
                                    <a href="{{ route('admin.ekskul.ekskul-siswa.show', $ekskul->id) }}" class="btn btn-sm btn-custom"><i class="fa fa-file-text-o"></i> Tampilkan Data Siswa</a>
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
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kelas as $kls)
                            <tr>
                                <td>{{ $kls->nama_kelas }}</td>
                                <td>
                                    <a href="{{ route('admin.kelas.kelas-siswa.show', $kls->id) }}" class="btn btn-sm btn-custom"><i class="fa fa-file-text-o"></i> Tampilkan Data Siswa</a>
                                    <a href="/admin/kelas/kelas-siswa/{{$kls->id}}/create" class="btn btn-sm btn-custom"><i class="fa fa-plus-square"></i> Tambah Data Siswa</a>
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
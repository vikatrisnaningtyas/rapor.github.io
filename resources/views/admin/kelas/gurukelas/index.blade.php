@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <h5 class="m-t-30"></h5>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kelases as $kelas)
                            <tr>
                                <td>{{ $kelas->nama_kelas }}</td>
                                <td>
                                    <a href="{{ route('admin.kelas.gurukelas.show', $kelas->id) }}" class="btn btn-xs btn-custom"><i
                                                class="fa fa-file-text-o"></i> Lihat</a>
                                    @if($kelas->gurukelas()->count() == 0)
                                    <a href="/admin/kelas/gurukelas/{{$kelas->id}}/create" class="btn btn-xs btn-success"><i
                                                class="fa fa-plus-square"></i> Input</a>
                                    @else
                                        <a href="" class="btn btn-xs btn-warning"><i
                                                    class="fa fa-edit"></i> Edit</a>
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
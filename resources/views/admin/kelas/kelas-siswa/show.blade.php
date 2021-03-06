@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-inline">
                                <label for="periode" class="">Periode   </label>
                                <select name="" id="periode" class="form-control select">
                                    <option value="">Pilih periode</option>
                                    @foreach($periode as $pr)
                                        <option value="{{$pr->id}}">{{$pr->thn_akademik. ' - Semester ' . $pr->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <h5 class="m-t-30"></h5>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS/NISN</th>
                            <th>Nama Siswa</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Status Dalam Keluarga</th>
                            <th>Anak ke</th>
                            <th>Alamat Siswa</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Alamat Orang Tua</th>
                            <th>Telepon Orang Tua</th>
                            <th>Pekerjaan Ayah</th>
                            <th>Pekerjaan Ibu</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($no=1)
                        @foreach($kelas->siswa($p)->get() as $siswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $siswa->nis.' / '. $siswa->nisn }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->tempat_lahir }}</td>
                                <td>{{ $siswa->tgl_lahir }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td>{{ $siswa->agama }}</td>
                                <td>{{ $siswa->status_anak }}</td>
                                <td>{{ $siswa->anak_ke }}</td>
                                <td>{{ $siswa->alamat_siswa }}</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                                <td>{{ $siswa->nama_ayah }}</td>
                                <td>{{ $siswa->nama_ibu }}</td>
                                <td>{{ $siswa->alamat_ortu }}</td>
                                <td>{{ $siswa->telp_ortu }}</td>
                                <td>{{ $siswa->pekerjaan_ayah }}</td>
                                <td>{{ $siswa->pekerjaan_ibu }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#periode').change(function () {
            window.location.replace("/admin/kelas/kelas-siswa/{{$kelas->id}}/show?p=" + $('#periode').val());
        });
    </script>
@endsection
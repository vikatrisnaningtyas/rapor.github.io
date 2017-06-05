@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Data Lengkap Siswa : {{ $siswa->nama_siswa }}</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <table class="table table-bordered" id="printableArea">
                        <tr>
                            <td colspan="2" align="center"><b>DATA SISWA</b></td>
                        </tr>
                        <tr>
                            <td>Nomor Induk Siswa / NISN</td>
                            <td>{{ $siswa->nis .' / '. $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>{{ $siswa->tempat_lahir. ', ' . $siswa->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ $siswa->agama }}</td>
                        </tr>
                        <tr>
                            <td>Status Dalam Keluarga</td>
                            <td>{{ $siswa->status_anak }}</td>
                        </tr>
                        <tr>
                            <td>Anak Ke-</td>
                            <td>{{ $siswa->anak_ke }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $siswa->alamat_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>{{ $siswa->telp_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>{{ $siswa->asal_sekolah }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal diterima di Sekolah ini</td>
                            <td>{{ $siswa->tgl_diterima }}</td>
                        </tr>
                        <tr>
                            <td>Pengesahan Rapor</td>
                            <td>{{ $siswa->pengesahan }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><b>DATA ORANG TUA</b></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>{{ $siswa->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>{{ $siswa->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Orang Tua</td>
                            <td>{{ $siswa->alamat_ortu }}</td>
                        </tr>
                        <tr>
                            <td>Telepon Orang Tua</td>
                            <td>{{ $siswa->telp_ortu }}</td>
                        </tr>
                        <tr>
                            <td>Pakerjaan Ayah</td>
                            <td>{{ $siswa->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>{{ $siswa->pekerjaan_ibu }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><b>DATA WALI</b></td>
                        </tr>
                        <tr>
                            <td>Nama Wali</td>
                            <td>{{ $siswa->nama_wali }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Wali</td>
                            <td>{{ $siswa->alamat_wali }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>{{ $siswa->pekerjaan_wali }}</td>
                        </tr>
                        <tr>
                            <td>Telepon Wali</td>
                            <td>{{ $siswa->telp_wali }}</td>
                        </tr>
                    </table>
                    <br>
                    <input type="button" class="btn btn-warning" onclick="printDiv('printableArea')" value="Print" />
                </div>
            </div>
        </div>
    </div>
@endsection
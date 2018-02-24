@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <input type="button" class="btn btn-warning" onclick="printDiv('printableArea')" value="Cetak" />
            <div class="legal">
                <div id="printableArea">
                    <section class="sheet padding">
                        <div class="row cover3-title-wrapper">
                            <div class="col-xs-12">
                                <div class="rapor size-15"><strong>KETERANGAN TENTANG DIRI PESERTA DIDIK</strong></div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table-biodata">
                                    <tr>
                                        <td>1.</td>
                                        <td>Nama Siswa (Lengkap)</td>
                                        <td>:</td>
                                        <td><strong>{{ $siswa->nama_siswa }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Nomor Induk / NISN</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nis }} / {{ $siswa->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{ $siswa->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Agama</td>
                                        <td>:</td>
                                        <td>{{ $siswa->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Status dalam Keluarga</td>
                                        <td>:</td>
                                        <td>{{ $siswa->status }}</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Anak ke</td>
                                        <td>:</td>
                                        <td>{{ $siswa->anak_ke }}</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Alamat Siswa</td>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat_siswa }}</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Nomor Telepon Rumah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->telp_siswa }}</td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Sekolah Asal</td>
                                        <td>:</td>
                                        <td>{{ $siswa->asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Diterima di Sekolah ini</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;Di Kelas</td>
                                        <td>: </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;Pada Tanggal</td>
                                        <td>:</td>
                                        <td>{{ $siswa->tgl_diterima }}</td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Nama Orang Tua</td>
                                        <td>: </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Alamat Orang Tua</td>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat_ortu }}</td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Nomor Telepon Rumah </td>
                                        <td>:</td>
                                        <td>{{ $siswa->telp_ortu }}</td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Pekerjaan Orang Tua</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;a. Ayah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->pekerjaan_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;b. Ibu</td>
                                        <td>:</td>
                                        <td>{{ $siswa->pekerjaan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Nama Wali Siswa</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nama_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Alamat Wali Siswa</td>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Nomor Telepon Rumah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->telp_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Pekerjaan Wali Siswa</td>
                                        <td>:</td>
                                        <td>{{ $siswa->pekerjaan_wali }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="photo-box">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row sign-wrapper">
                                    <div class="col-xs-12 sign-right-wrapper rapor size-11">
                                        Pacitan, date<br/>
                                        Kepala Sekolah, <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <b>Drs. Gatot Koco</b><br/>
                                        NIP.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer-left">LHB-SMP NEGERI 1 PACITAN</div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer-right">Hal - ii</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
@endsection
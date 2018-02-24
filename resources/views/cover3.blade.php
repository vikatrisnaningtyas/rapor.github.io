@extends('layouts.layout')

@section('content')
    <style>
        page[size="Legal"] {
            background: white;
            width: 8.3in;
            height: 11.7in;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            padding: 2cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        @media print {
            body, page[size="Legal"] {
                margin: 0;
                box-shadow: 0;
                position: fixed;
            }
        }

        #printableArea {
            font-size: 12px;
            color: black;

        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
                    <page size="Legal" id="printableArea">
                        <div class="row cover3-title-wrapper">
                            <div class="col-xs-12">
                                <h3>KETERANGAN TENTANG DIRI PESERTA DIDIK</h3>
                            </div>
                        </div>
                        <div class="row detail-table-wrapper">
                            <div class="col-xs-12">
                                <table>
                                    <tr class="detail_space">
                                        <td>1</td>
                                        <td>Nama Siswa(Lengkap)</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>2</td>
                                        <td>Nomer Induk / NISN</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>3</td>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>4</td>
                                        <td>Jenis Kelamin</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>5</td>
                                        <td>Agama</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>6</td>
                                        <td>Status dalam Keluarga</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>7</td>
                                        <td>Anak ke</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>8</td>
                                        <td>Alamat Siswa</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>9</td>
                                        <td>Nomer Telepon Rumah</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>10</td>
                                        <td>Sekolah Asal</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>11</td>
                                        <td>Diterima di Sekolah ini</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;Di Kelas</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;Pada Tanggal</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>12</td>
                                        <td>Nama Orang Tua</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;a. Ayah</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;b. Ibu</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>13</td>
                                        <td>Alamat Orang Tua</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>14</td>
                                        <td>Nomer Telepon Rumah </td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>15</td>
                                        <td>Pekerjaan Tuan Rumah</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;a. Ayah</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;b. Ibu</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>16</td>
                                        <td>Nama Wali Siswa</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>17</td>
                                        <td>Alamat Wali Siswa</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>18</td>
                                        <td>Nomer Telepon Rumah</td>
                                        <td>: </td>
                                    </tr>
                                    <tr class="detail_space">
                                        <td>19</td>
                                        <td>Pekerjaan Wali Siswa</td>
                                        <td>: </td>
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
                                    <div class="col-xs-12 sign-right-wrapper">
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
                            <div class="col-xs-12" id="cover3-footer">
                                <table>
                                    <tr>
                                        <td><i>LHB-</i></td>
                                        <td><i>SMP</i></td>
                                        <td><i>NEGERI 1 PACITAN</i></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </page>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
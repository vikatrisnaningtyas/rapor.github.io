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

        #rapor-table-wrapper4 table {
            border:1px solid #AAAAAA;
        }
        #rapor-table-wrapper4 th {
            border:1px solid #AAAAAA;
        }
        #rapor-table-wrapper4 td {
            border:1px solid #AAAAAA;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
                    <page size="Legal" id="printableArea">
                        <div class="row">
                            <h5><strong>C. Ekstrakurikuler</strong></h5>
                            <div class="row rapor-table-wrapper">
                                <div class="col-xs-12" id="rapor-table-wrapper4">
                                    <table class="table">
                                        <tr class="rapor-table-header">
                                            <th colspan="2">Kegiatan Ekstrakurikuler</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Pendidikan Kepramukaan</td>
                                            <td>B</td>
                                            <td>Baik</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sepak Bola</td>
                                            <td>C</td>
                                            <td>Cukup</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Catur</td>
                                            <td>SB</td>
                                            <td>Sangat Baik</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Kerohanian</td>
                                            <td>B</td>
                                            <td>Baik</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <h5><strong>D. Ketidakhadiran</strong></h5>
                            <div class="row rapor-table-wrapper">
                                <div class="col-xs-12" id="rapor-table-wrapper4">
                                    <table class="table">
                                        <tr>
                                            <td>Sakit</td>
                                            <td>4 Hari</td>
                                        </tr>
                                        <tr>
                                            <td>Izin</td>
                                            <td>3 Hari</td>
                                        </tr>
                                        <tr>
                                            <td>Tanpa Keterangan</td>
                                            <td>2 Hari</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row sign-wrapper">
                            <div class="col-xs-6 sign-left-wrapper">
                                Mengetahui :<br/>
                                Orang Tua/Wali,<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                ......................
                            </div>
                            <div class="col-xs-6 sign-right-wrapper">
                                Pacitan, date<br/>
                                Wali Kelas,<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <b>Srikandi</b><br/>
                                NIP.
                            </div>
                        </div>
                        <div class="row sign-wrapper">
                            <div class="col-xs-12 sign-center-wrapper">
                                Mengetahui :<br/>
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
                        <div class="row">
                            <div class="col-xs-12 footer-wrapper">
                                <table>
                                    <tr>
                                        <td>AMELIA CAHYANINGTYAS |</td>
                                        <td>6075 |</td>
                                        <td>KELAS:8-A |</td>
                                        <td>Semester:1 |</td>
                                        <td>2016-2017 </td>
                                        <td>Halaman: 1</td>
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
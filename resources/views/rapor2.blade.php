
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
                        <div class="row">
                            <h5 align="center"><b>PENCAPAIAN KOMPETENSI SISWA</b></h5>
                        </div><br/>
                        <div class="row table-sikap-wrapper">
                            <div class="col-sm-12 col-md-12 col-xs-12 table-sikap">
                                <table class="no-border" border="0">
                                    <tr class="space">
                                        <td class="space">Nama Sekolah </td>
                                        <td class="space add-space"> : SMP Negeri 1 Pacitan</td>
                                        <td>Kelas </td>
                                        <td>: VII A</td>
                                    </tr>
                                    <tr class="space">
                                        <td>Alamat </td>
                                        <td>: Jl. A. Yani-41 Pacitan</td>
                                        <td>Semester </td>
                                        <td>: 1 (Satu)</td>
                                    </tr>
                                    <tr class="space">
                                        <td>Nama Peserta Didik</td>
                                        <td>: VIKA TRISNANINGTYAS</td>
                                        <td>Tahun Pelajaran </td>
                                        <td>: 2015/2016</td>
                                    </tr>
                                    <tr class="space">
                                        <td>No. Induk / NISN </td>
                                        <td>: 21217/985875754</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row table-sikap-wrapper">
                            <div class="col-sm-12 col-md-12 col-xs-12 table-sikap">
                            <h5><strong>A. SIKAP</strong></h5>
                            <h5><strong>1. Spiritual</strong></h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <h5><strong>2. Sikap Sosial</strong></h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 rapor-image-wrapper">
                                <img class="rapor-image" src="{{ asset('images/smp/Logo-Color.png') }}">
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

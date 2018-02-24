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

        #rapor-table-wrapper3 table {
            border:1px solid #AAAAAA;
        }
        #rapor-table-wrapper3 th {
            border:1px solid #AAAAAA;
        }
        #rapor-table-wrapper3 td {
            border:1px solid #AAAAAA;
        }
        div h5 {
            margin-left: 28px;
        }


    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
                    <page size="Legal" id="printableArea">
                        <div class="row">
                            <h5><strong>B. Pengetahuan dan Keterampilan</strong></h5>
                            <div class="row rapor-table-wrapper">
                                <div class="col-xs-12" id="rapor-table-wrapper3">
                                    <table class="table">
                                        <tr class="rapor-table-header">
                                            <th rowspan="2" colspan="2">Mata Pelajaran</th>
                                            <th rowspan="2">KKM</th>
                                            <th colspan="3">Pengetahuan</th>
                                            <th colspan="3">Keterampilan</th>
                                        </tr>
                                        <tr class="rapor-table-header">
                                            <th>Angka</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                            <th>Angka</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Kelompok A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Pendidikan Agama dan Budi Pekerti</td>
                                            <td>75</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                            <td>75</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>75</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Matematika</td>
                                            <td>70</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ilmu Pengetahuan Alam</td>
                                            <td>70</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Ilmu Pengetahuan Sosial</td>
                                            <td>70</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Bahasa Inggris</td>
                                            <td>70</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Kelompok B</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Seni Budaya</td>
                                            <td>72</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
                                            <td>72</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Prakarya</td>
                                            <td>72</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bahasa Daerah</td>
                                            <td>72</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td></td>
                                            <td>72</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
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
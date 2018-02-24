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

        table, th, td {
            border:1px solid #AAAAAA;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="card-box">
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
                    <page size="Legal" id="printableArea">
                        <div class="row" style="position: relative">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <img class="cover-garuda-image" src="{{ asset('images/gallery/Garuda_hitamputih.png') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xs-12 cover-title-wrapper">
                                <h2><strong>RAPOR SISWA</strong></h2>
                                <h2>SEKOLAH MENENGAH PERTAMA (SMP)</h2>
                                <h2>SMP NEGERI 1 PACITAN</h2>
                            </div>
                        </div>
                        <div class="row" style="position: relative">
                            <div class="col-sm-12 col-md-12 col-xs-12col-xs-12">
                                <img class="cover-yani-image" src="{{ asset('images/gallery/Tut_Wuri_Handayani.svg.png') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xs-12 cover-detail-wrapper">
                                <h5>Nama Peserta Didik</h5>
                                <h3><strong>ADIB PRASETYO</strong></h3>
                                <h4><strong>NIS/NISN : </strong></h4>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <h4><strong>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN<br/>
                                REPUBLIK INDONESIA</strong></h4>
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

@extends('layouts.layout')

@section('content')
    <style>
        page[size="Legal"] {
            background: white;
            width: 8.5in;
            height: 18in;
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
            font-size: 22px;
            color: black;

        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
                    <page size="Legal" id="printableArea">
                        <h5></h5>
                        <br/><br/><br/>
                        <div class="col-xs-12" align="center">
                            <b>
                                RAPOR SISWA <br/>
                                SEKOLAH MENENGAH PERTAMA <br/>
                                (SMP)
                            </b>
                        </div>
                    </page>
                </div>
            </div>
        </div>
    </div>
@endsection

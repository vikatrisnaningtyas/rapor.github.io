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
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
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
                    <input type="button" onclick="printDiv('printableArea')" value="print a div!"/>
                    <page size="Legal" id="printableArea">

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
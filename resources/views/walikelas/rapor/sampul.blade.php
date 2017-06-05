@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <input type="button" class="btn btn-warning" onclick="printDiv('printableArea')" value="Cetak" />
            <div class="legal">
                <div id="printableArea">
                    <section class="sheet padding-25mm">
                        <h4 class="header-title m-t-0 m-b-30"></h4>
                        <div class="row" style="position: relative">
                            <div class="col-md-12">
                                <img class="cover-garuda-image" style="width: 125px" src="{{ asset('images/gallery/Garuda_hitamputih.png') }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 cover-title-wrapper">
                                <div class="rapor size-20"><strong>RAPOR SISWA</strong></div>
                                <div class="rapor size-18"><strong>SEKOLAH MENENGAH PERTAMA (SMP)</strong></div>
                                <div class="rapor size-18"><strong>SMP NEGERI 1 PACITAN</strong></div>
                            </div>
                        </div>
                        <div class="row" style="position: relative">
                            <div class="col-xs-12">
                                <img class="cover-yani-image" src="{{ asset('images/gallery/Tut_Wuri_Handayani.svg.png') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 cover-detail-wrapper">
                                <div class="rapor size-14">Nama Peserta Didik</div>
                                <div class="rapor size-20"><strong>{{ $siswa->nama_siswa }}</strong></div>
                                <div class="rapor size-14"><strong>NIS/NISN : {{ $siswa->nis }} / {{ $siswa->nisn }}</strong></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 cover-footer">
                                <div class="rapor size-14"><strong>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</strong></div>
                                <div class="rapor size-14"><strong>REPUBLIK INDONESIA</strong></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
@endsection
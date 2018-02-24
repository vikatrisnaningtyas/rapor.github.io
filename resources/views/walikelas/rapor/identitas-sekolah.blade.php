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
                                <img class="cover-garuda-image"
                                     src="{{ asset('images/gallery/Garuda_hitamputih.png') }}">
                            </div>
                        </div>
                        <div class="row cover-title-wrapper">
                            <div class="col-xs-12">
                                <div class="rapor size-14"><strong>RAPOR SISWA</strong></div>
                                <div class="rapor size-14"><strong>SEKOLAH MENENGAH PERTAMA (SMP)</strong></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table-identitas">
                                    <tr>
                                        <td>Nama Sekolah</td>
                                        <td>:</td>
                                        <td><b>SMP NEGERI 1 PACITAN</b></td>
                                    </tr>
                                    <tr>
                                        <td>NPSN</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>NIS/NSS/NDS</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Sekolah</td>
                                        <td>:</td>
                                        <td>Jl. Pringgodani 57 Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Desa/Kelurahan</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Kota/Kabupaten</td>
                                        <td>:</td>
                                        <td>Pacitan</td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>.................................................</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 rapor-footer">
                                <div class="col-xs-8">
                                    <div class="footer-left">LHB-SMP NEGERI 1 PACITAN</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="footer-right">Hal - i</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
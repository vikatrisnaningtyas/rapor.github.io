@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Detail Kelas {{ $kelas->nama_kelas }}</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="no-border">
                                <tr>
                                    <td class="spacer">KELAS</td>
                                    <td>{{ $kelas->nama_kelas }}</td>
                                </tr>
                                <tr class="spacer">
                                    <td class="spacer">WALIKELAS</td>
                                    <td class="spacer">{{ $kelas->walikelas[0]->nama_guru }}</td>
                                </tr>
                                <tr class="spacer">
                                    <td class="spacer">MATA PELAJARAN</td>
                                    <td class="spacer add-spacer">{{ Auth::user()->guru->mapel->nama_mapel }}</td>
                                </tr>
                                <tr class="spacer">
                                    <td>TAHUN PELAJARAN</td>
                                    <td>{{ $periode->thn_akademik }}</td>
                                </tr>
                                <tr class="spacer">
                                    <td>SEMESTER</td>
                                    <td>
                                        {{ $periode->semester }}
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="m-t-30">BOBOT NILAI</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <td><strong>PENGETAHUAN</strong></td>
                                    <td>N.Proses</td>
                                    <td>40%</td>
                                    <td>HPTS</td>
                                    <td>30%</td>
                                    <td>HPAS</td>
                                    <td>30%</td>
                                    <td></td>
                                    <td></td>
                                    <td><strong>100%</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>KETERAMPILAN</strong></td>
                                    <td>NPrak</td>
                                    <td>40%</td>
                                    <td>NProd</td>
                                    <td>20%</td>
                                    <td>NProy</td>
                                    <td>20%</td>
                                    <td>NPort</td>
                                    <td>20%</td>
                                    <td><strong>100%</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('guru.siswa-kelas', $kelas) }}" class="btn btn-custom waves-effect w-md m-b-5">Lihat Data Siswa</a>
                            <a href="" class="btn btn-pink waves-effect w-md m-b-5">Lihat Rekap Deskom</a>
                            <a href="{{ route('guru.nilai.keterampilan', $kelas) }}" class="btn btn-purple waves-effect w-md m-b-5">Input Nilai Keterampilan</a>
                            <a href="{{ route('guru.nilai.pengetahuan', $kelas) }}" class="btn btn-success waves-effect w-md m-b-5">Input Nilai Pengetahuan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
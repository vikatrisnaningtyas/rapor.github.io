@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Input Nilai Keterampilan</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <table id="nilaiKetTable" class="table table-striped table-bordered m-b-0">
                            <thead>
                            <tr>
                                <th>NO.</th>
                                <th>NIS</th>
                                <th>NAMA SISWA</th>
                                <th>L/P</th>
                                <th colspan="2">PRAKTIK</th>
                                <th colspan="2">PRODUK</th>
                                <th colspan="2">PROYEK</th>
                                <th>PORTOFOLIO</th>
                                <th>NILAI AKHIR</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($no=1)
                            @foreach($kelas->siswa as $siswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->nama_siswa }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td id="praktik1{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="4"
                                        ke="1">{{ $siswa->praktik(auth()->user()->guru->mapel_id, 1) }}</td>
                                    <td id="praktik2{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="4"
                                        ke="2">{{ $siswa->praktik(auth()->user()->guru->mapel_id, 2) }}</td>
                                    <td id="produk1{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="5"
                                        ke="1">{{ $siswa->produk(auth()->user()->guru->mapel_id, 1) }}</td>
                                    <td id="produk2{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="5"
                                        ke="2">{{ $siswa->produk(auth()->user()->guru->mapel_id, 2) }}</td>
                                    <td id="proyek1{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="6"
                                        ke="1">{{ $siswa->proyek(auth()->user()->guru->mapel_id, 1) }}</td>
                                    <td id="proyek2{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="6"
                                        ke="2">{{ $siswa->proyek(auth()->user()->guru->mapel_id, 2) }}</td>
                                    <td id="portofolio{{ $siswa->nis }}"
                                        nis="{{ $siswa->nis }}"
                                        jenis_nilai_id="7">{{ $siswa->portofolio(auth()->user()->guru->mapel_id) }}</td>
                                    <td><strong>0</strong></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#nilaiKetTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2, 3, 4, 12]
        }).numericInputExample();
        $('#nilaiKetTable td').on('change', function (evt, newValue) {
            var id = evt.target.id;
            var ele = $('#'+id);
            console.log(ele.attr('nis'));
            console.log(newValue);
            if (id.substring(0, 7) == 'praktik' || id.substring(0, 6) == 'produk' || id.substring(0, 6) == 'proyek') {
                var data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'siswa_nis': ele.attr('nis'),
                    'jenis_nilai_id': ele.attr('jenis_nilai_id'),
                    'ke': ele.attr('ke'),
                    'nilai': newValue
                };
            } else {
                var data = {
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'siswa_nis' : ele.attr('nis'),
                    'jenis_nilai_id' : ele.attr('jenis_nilai_id'),
                    'nilai' : newValue
                }
            }

            $.post(
                    "/guru/nilai/", data,
                    function (d) {

                    });
        });
    </script>
@endsection

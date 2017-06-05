@extends('layouts.layout')

@section('page-title')
    <h4 class="page-title">Input Nilai Pengetahuan</h4>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <table id="nilaiPeTable" class="table table-striped table-bordered m-b-0">
                            <thead>
                            <tr>
                                <th rowspan="2">NO.</th>
                                <th rowspan="2">NIS</th>
                                <th rowspan="2">NAMA SISWA</th>
                                <th rowspan="2">L/P</th>
                                <th colspan="8">N.PROSES/NH(Tes Tertulis, Lisan, Tugas)</th>
                                <th rowspan="2" title="Hasil Penilaian Harian">HPH</th>
                                <th rowspan="2">HPTS</th>
                                <th rowspan="2">HPAS</th>
                                <th rowspan="2">HPA</th>
                            </tr>
                            <tr>
                                <th>H-1</th>
                                <th>H-2</th>
                                <th>H-3</th>
                                <th>H-4</th>
                                <th>H-5</th>
                                <th>H-6</th>
                                <th>H-7</th>
                                <th>H-8</th>
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
                                <td
                                    id="harian1{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="1">{{$siswa->harian(auth()->user()->guru->mapel_id,1)}}</td>
                                <td id="harian2{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="2">{{$siswa->harian(auth()->user()->guru->mapel_id,2)}}</td>
                                <td id="harian3{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="3">{{$siswa->harian(auth()->user()->guru->mapel_id,3)}}</td>
                                <td id="harian4{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="4">{{$siswa->harian(auth()->user()->guru->mapel_id,4)}}</td>
                                <td id="harian5{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="5">{{$siswa->harian(auth()->user()->guru->mapel_id,5)}}</td>
                                <td id="harian6{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="6">{{$siswa->harian(auth()->user()->guru->mapel_id,6)}}</td>
                                <td id="harian7{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="7">{{$siswa->harian(auth()->user()->guru->mapel_id,7)}}</td>
                                <td id="harian8{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="1"
                                    ke="8">{{$siswa->harian(auth()->user()->guru->mapel_id,8)}}</td>
                                <td><strong>{{$siswa->rataHarian(auth()->user()->guru->mapel_id)}}</strong></td>
                                <td id="uts{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="2">{{$siswa->uts(auth()->user()->guru->mapel_id)}}</td>
                                <td id="uas{{ $siswa->nis }}"
                                    nis="{{ $siswa->nis }}"
                                    jenis_nilai_id="3">{{$siswa->uas(auth()->user()->guru->mapel_id)}}</td>
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
    <script src="{{ asset('js/vue.min,js') }}"></script>
    <script>
        //Guru - Nilai
        $('#nilaiPeTable').editableTableWidget({
            editor: $('<input>'),
            preventColumns: [1, 2, 3, 4, 13, 16]
        }).numericInputExample();
        $('#nilaiPeTable td').on('change', function (evt, newValue) {
            // do something with the new cell value
            var id = evt.target.id;
            var ele = $('#'+id);
            console.log(ele.attr('nis'));
            console.log(newValue);
            if (id.substring(0, 6) == 'harian') {
                var data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'siswa_nis': ele.attr('nis'),
                    'jenis_nilai_id': ele.attr('jenis_nilai_id'),
                    'ke': ele.attr('ke'),
                    'nilai': newValue
                };
            } else {
               var data =  {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                        'siswa_nis': ele.attr('nis'),
                        'jenis_nilai_id': ele.attr('jenis_nilai_id'),
                        'nilai': newValue
                };
            }

            $.post(
                    "/guru/nilai/", data,
                    function (d) {

                    });
        });
    </script>
@endsection
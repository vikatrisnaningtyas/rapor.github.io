<div id="sidebar-menu">
    <ul>
        <li class="text-muted menu-title">Navigation</li>

        <li>
            <a href="" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
        </li>

        @if(auth()->user()->role('guru'))
            <li class="text-muted menu-title">Mengajar Kelas :</li>

            @foreach(auth()->user()->guru->gurukelas as $kelas)
                <li>
                    <a href="{{ route('kelas-detail.show', $kelas->id) }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> {{$kelas->nama_kelas}} </span> </a>
                </li>
            @endforeach
        @endif

        @if(auth()->user()->role('guruekskul'))
            <li class="text-muted menu-title">Pembimbing Ekskul : <strong class="text-primary">{{ Auth::user()->guru->ekskul()->first()->nama_ekskul }}</strong></li>

            <li>
                <a href="{{ route('siswa-ekskul.index') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Data Siswa Ekskul</span> </a>
            </li>

            <li>
                <a href="{{ route('nilai-ekskul.index') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Input Nilai Ekskul </span> </a>
            </li>
        @endif

        @if(auth()->user()->role('walikelas'))
            <li class="text-muted menu-title">Wali Kelas : <strong class="text-primary">{{ Auth::user()->guru->walikelas()->first()->nama_kelas }}</strong></li>

            <li>
                <a href="{{ route('data-siswa.index') }}" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i>  <span> Data Siswa </span> </a>
            </li>

            <li>
                <a href="{{ route('guru-mapel.index') }}" class="waves-effect"><i class="zmdi zmdi-face"></i>  <span> Data Guru yang Mengajar </span> </a>
            </li>

            <li>
                <a href="{{ route('nilai-sikap.index') }}" class="waves-effect"><i class="zmdi zmdi-collection-text"></i>  <span> Nilai Sikap dan Spiritual </span> </a>
            </li>

            <li>
                <a href="{{ route('absensi.index') }}" class="waves-effect"><i class="zmdi zmdi-collection-item"></i>  <span> Absensi </span> </a>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-folder"></i> <span> Rekap </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('walikelas.rekap-nilai.ekskul') }}">Nilai Ekstrakurikuler</a></li>
                    <li><a href="">Nilai Mata Pelajaran</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment"></i> <span> Cetak Rapor </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('walikelas.rapor.identitas-sekolah') }}">Halaman Identitas Sekolah</a></li>
                    <li><a href="{{ route('walikelas.rapor.petunjuk') }}">Halaman Petunjuk Pengisian</a></li>
                    <li><a href="{{ route('walikelas.rapor.index') }}" class="waves-effect">Rapor Siswa</a></li>
                </ul>
            </li>

            <li>
                <i class=""></i>  <span> Cetak Rapor </span> </a>
            </li>
        @endif

        @if(auth()->user()->role('admin'))
            <li>
                <a href="{{ route('periode.index') }}" class="waves-effect"><i class="zmdi zmdi-calendar"></i>  <span> Periode </span> </a>
            </li>

            <li>
                <a href="{{ route('jenis-nilai.index') }}" class="waves-effect"><i class="zmdi zmdi-local-library"></i>  <span> Jenis Nilai </span> </a>
            </li>

            <li>
                <a href="{{ route('bobot.index') }}" class="waves-effect"><i class="zmdi zmdi-local-library"></i>  <span> Bobot Nilai </span> </a>
            </li>

            <li>
                <a href="{{ route('kkm.index') }}" class="waves-effect"><i class="zmdi zmdi-local-library"></i>  <span> KKM </span> </a>
            </li>

            <li>
                <a href="{{ route('siswa.index') }}" class="waves-effect"><i class="zmdi zmdi-local-library"></i>  <span> Siswa </span> </a>
            </li>

            <li>
                <a href="{{ route('guru.index') }}" class="waves-effect"><i class="zmdi zmdi-layers"></i> <span> Guru </span> </a>
            </li>

            <li>
                <a href="{{ route('mapel.index') }}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Mata Pelajaran </span> </a>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Kelas </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('kelas.index') }}">Data Kelas</a></li>
                    <li><a href="{{ route('admin.kelas.kelas-siswa.index') }}">Data Siswa per Kelas</a></li>
                    <li><a href="{{ route('admin.kelas.walikelas.index') }}">Wali Kelas</a></li>
                    <li><a href="{{ route('admin.kelas.gurukelas.index') }}">Guru Mapel</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-palette"></i> <span> Ekstrakurikuler </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('ekskul.index') }}">Data Ekstrakurikuler</a></li>
                    <li><a href="{{ route('admin.ekskul.ekskul-siswa.index') }}">Daftar Siswa per Ekskul</a></li>
                    <li><a href="{{ route('admin.ekskul.ekskul-guru.index') }}">Guru Ekskul</a></li>
                </ul>
            </li>
        @endif
    </ul>

    <div class="clearfix"></div>
</div>
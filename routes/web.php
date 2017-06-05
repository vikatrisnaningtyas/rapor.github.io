<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('mapel', 'Admin\MapelController');
    Route::resource('guru', 'Admin\GuruController');
    Route::resource('siswa', 'Admin\SiswaController');
    Route::get('kelas/walikelas', ['uses' => 'Admin\KelasController@walikelasIndex', 'as' => 'admin.kelas.walikelas.index']);
    Route::get('/kelas/walikelas/{id}/create/', 'Admin\KelasController@walikelasCreate');
    Route::post('/kelas/walikelas/{id}','Admin\KelasController@walikelasStore');
    Route::get('kelas/gurukelas', ['uses' => 'Admin\KelasController@guruKelasIndex', 'as' => 'admin.kelas.gurukelas.index']);
    Route::get('kelas/gurukelas/{kelas}/show', ['uses' => 'Admin\KelasController@guruKelasShow', 'as' => 'admin.kelas.gurukelas.show']);
    Route::get('/kelas/gurukelas/{id}/create', 'Admin\KelasController@guruKelasCreate');
    Route::post('/kelas/gurukelas/{id}','Admin\KelasController@guruKelasStore');
    Route::get('kelas/kelas-siswa', ['uses' => 'Admin\KelasController@kelasSiswaIndex', 'as' => 'admin.kelas.kelas-siswa.index']);
    Route::get('kelas/kelas-siswa/{id}/show', ['uses' => 'Admin\KelasController@kelasSiswaShow', 'as' => 'admin.kelas.kelas-siswa.show']);
    Route::get('/kelas/kelas-siswa/{id}/create', 'Admin\KelasController@kelasSiswaCreate');
    Route::post('/kelas/kelas-siswa/{id}','Admin\KelasController@kelasSiswaStore');
    Route::resource('kelas', 'Admin\KelasController');
    Route::get('ekskul/ekskul-siswa', ['uses' => 'Admin\EkskulController@ekskulSiswaIndex', 'as' => 'admin.ekskul.ekskul-siswa.index']);
    Route::get('ekskul/ekskul-siswa/{id}/show', ['uses' => 'Admin\EkskulController@ekskulSiswaShow', 'as' => 'admin.ekskul.ekskul-siswa.show']);
    Route::get('ekskul/ekskul-guru', ['uses' => 'Admin\EkskulController@ekskulGuruIndex', 'as' => 'admin.ekskul.ekskul-guru.index']);
    Route::get('ekskul/ekskul-guru/create', ['uses' => 'Admin\EkskulController@ekskulGuruCreate', 'as' => 'admin.ekskul.ekskul-guru.create']);
    Route::post('ekskul/ekskul-guru/','Admin\EkskulController@ekskulGuruStore');
    Route::resource('ekskul', 'Admin\EkskulController');
    Route::resource('periode', 'Admin\PeriodeController');
    Route::resource('jenis-nilai', 'Admin\JenisNilaiController');
    Route::resource('bobot', 'Admin\BobotController');
    Route::resource('kkm', 'Admin\KkmController');
});

Route::group(['prefix' => 'walikelas', 'middleware' => ['auth']], function () {
    Route::post('/absensi/absen','Walikelas\AbsensiController@absen');
    Route::resource('absensi', 'Walikelas\AbsensiController');
    Route::resource('data-siswa', 'Walikelas\SiswaController');
    Route::post('/nilai-sikap/nilai','Walikelas\NilaiSikapController@nilai');
    Route::resource('nilai-sikap', 'Walikelas\NilaiSikapController');
    Route::resource('guru-mapel', 'Walikelas\GuruMapelController');
    Route::get('rekap-nilai/ekskul', ['uses' => 'Walikelas\RekapController@rekapEkskul', 'as' => 'walikelas.rekap-nilai.ekskul']);
    Route::get('rapor/', ['uses' => 'Walikelas\RaporController@index', 'as' => 'walikelas.rapor.index']);
    Route::get('rapor/{id}/sampul', ['uses' => 'Walikelas\RaporController@sampul', 'as' => 'walikelas.rapor.sampul']);
    Route::get('rapor/{id}/biodata-siswa', ['uses' => 'Walikelas\RaporController@biodataSiswa', 'as' => 'walikelas.rapor.biodata-siswa']);
    Route::get('rapor/{id}/rapor-smt-1', ['uses' => 'Walikelas\RaporController@raporSmtSatu', 'as' => 'walikelas.rapor.rapor-smt-1']);
    Route::get('rapor/{id}/rapor-smt-2', ['uses' => 'Walikelas\RaporController@raporSmtDua', 'as' => 'walikelas.rapor.rapor-smt-2']);
    Route::get('rapor/identitas-sekolah', ['uses' => 'Walikelas\RaporController@identitasSekolah', 'as' => 'walikelas.rapor.identitas-sekolah']);
    Route::get('rapor/petunjuk', ['uses' => 'Walikelas\RaporController@petunjuk', 'as' => 'walikelas.rapor.petunjuk']);
});

Route::group(['prefix' => 'guru', 'middleware' => ['auth']], function () {
    Route::get('/nilai/{kelas}/pengetahuan', ['uses' => 'Guru\NilaiController@pengetahuan', 'as' => 'guru.nilai.pengetahuan']);
    Route::get('/nilai/{kelas}/pengetahuan/data', ['uses' => 'Guru\NilaiController@nilaiPengetahuan', 'as' => 'guru.nilai.pengetahuan.data']);
    Route::get('/nilai/{id}/keterampilan', ['uses' => 'Guru\NilaiController@keterampilan', 'as' => 'guru.nilai.keterampilan']);
    Route::resource('nilai', 'Guru\NilaiController');
    Route::resource('kelas-detail', 'Guru\KelasController');
    Route::get('siswa-kelas/{id}', ['uses' => 'Guru\KelasController@siswa', 'as' => 'guru.siswa-kelas']);
    Route::get('siswa-kelas/{id}/detail', ['uses' => 'Guru\KelasController@siswaShow', 'as' => 'guru.siswa-kelas.detail']);
});

Route::group(['prefix' => 'guru-ekskul', 'middleware' => ['auth']], function () {
    Route::resource('siswa-ekskul', 'GuruEkskul\NilaiEkskulController');
    Route::get('nilai-ekskul', ['uses' => 'GuruEkskul\NilaiEkskulController@nilaiIndex', 'as' => 'nilai-ekskul.index']);
    Route::post('/nilai-ekskul/nilai','GuruEkskul\NilaiEkskulController@nilai');
});




Route::get('/nilai1', function () {
    return view('guru.pengetahuan');
});


Route::get('tes', function() {
    return 'Hi Admin..';
})->middleware('role.match:admin,guru');

Route::get('/rapor', function () {
    return view('rapor1');
});

Route::get('/rapor2', function () {
    return view('rapor2');
});

Route::get('/rapor3', function () {
    return view('rapor3');
});

Route::get('/rapor4', function () {
    return view('rapor4');
});

Route::get('/cover', function () {
    return view('cover1');
});

Route::get('/cover2', function () {
    return view('cover2');
});

Route::get('/cover3', function () {
    return view('cover3');
});

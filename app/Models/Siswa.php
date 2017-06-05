<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    protected $guarded = ['nis'];
    //protected $dateFormat = 'd-m-Y';
    public $timestamps = false;
    
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function nilaiSikap()
    {
        return $this->hasMany(Siswa::class);
    }

    public function kelas()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsToMany(Kelas::class, 'kelas_siswa', 'siswa_nis', 'kelas_id')->wherePivot('periode_id', $periode->id);
    }

    public function ekskul()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsToMany(Ekskul::class, 'ekskul_siswa', 'siswa_nis', 'ekskul_id')->wherePivot('periode_id', $periode->id)
            ->withPivot('predikat')->withPivot('deskripsi');
    }

    public function nilai()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->hasMany(Nilai::class, 'siswa_nis')->where('periode_id', $periode->id);
    }
    
    public function getTglLahirAttribute($value)
    {
        $tanggal = Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
        return $tanggal;
    }

    public function setTglLahirAttribute($value)
    {
        $this->attributes['tgl_lahir'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }

    public function getTglDiterimaAttribute($value)
    {
        $tanggal = Carbon::createFromFormat('Y-m-d', $value)->format('m-d-Y');
        return $tanggal;
    }

    public function setTglDiterimaAttribute($value)
    {
        $this->attributes['tgl_diterima'] = Carbon::createFromFormat('m-d-Y', $value)->format('Y-m-d');
    }

    public function getSakitAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $absen = Absensi::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($absen->count() > 0){
            $absen =$absen->first();
            return $absen->sakit;
        }else{
            return 0;
        }
    }

    public function getIjinAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $absen = Absensi::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($absen->count() > 0){
            $absen =$absen->first();
            return $absen->ijin;
        }else{
            return 0;
        }
    }

    public function getAlphaAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $absen = Absensi::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($absen->count() > 0){
            $absen =$absen->first();
            return $absen->alpha;
        }else{
            return 0;
        }
    }

    public function getSosialAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilaiSikap = NilaiSikap::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($nilaiSikap->count() > 0){
            $nilaiSikap =$nilaiSikap->first();
            return $nilaiSikap->sosial;
        }else{
            return '';
        }
    }

    public function getDesSosialAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilaiSikap = NilaiSikap::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($nilaiSikap->count() > 0){
            $nilaiSikap =$nilaiSikap->first();
            return $nilaiSikap->des_sosial;
        }else{
            return '';
        }
    }

    public function getSpiritualAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilaiSikap = NilaiSikap::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($nilaiSikap->count() > 0){
            $nilaiSikap =$nilaiSikap->first();
            return $nilaiSikap->spiritual;
        }else{
            return '';
        }
    }

    public function getDesSpiritualAttribute()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilaiSikap = NilaiSikap::where('periode_id', $periode->id)->where('siswa_nis', $this->nis);
        if ($nilaiSikap->count() > 0){
            $nilaiSikap =$nilaiSikap->first();
            return $nilaiSikap->des_spiritual;
        }else{
            return '';
        }
    }

    public function harian($mapel,$ke)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis',$this->nis)
            ->where('jenis_nilai_id',1)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < $ke){
            return  '';
        }else{
            $nilai = $nilai->get()[$ke - 1];
            return $nilai->nilai;
        }
    }

    public function uts($mapel)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis',$this->nis)
            ->where('jenis_nilai_id',2)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < 1){
            return 0;
        }else{
            $nilai = $nilai->first();
            return $nilai->nilai;
        }
    }

    public function uas($mapel)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis',$this->nis)
            ->where('jenis_nilai_id',3)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < 1){
            return 0;
        }else{
            $nilai = $nilai->first();
            return $nilai->nilai;
        }
    }

    public function rataHarian($mapel)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis',$this->nis)
            ->where('jenis_nilai_id',1)
            ->where('mapel_id', $mapel);
        $count = $nilai->count();
        if ($count > 0){
            $a = 0;
            foreach ($nilai->get() as $n) {
                $a += $n->nilai;
            }
            return sprintf('%d', $a / $count);
        }
        return 0;
    }

    public function praktik($mapel, $ke)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis', $this->nis)
            ->where('jenis_nilai_id', 4)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < $ke) {
            return '';
        } else {
            $nilai = $nilai->get()[$ke - 1];
            return $nilai->nilai;
        }
    }

    public function produk($mapel, $ke)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis', $this->nis)
            ->where('jenis_nilai_id', 5)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < $ke) {
            return '';
        } else {
            $nilai = $nilai->get()[$ke - 1];
            return $nilai->nilai;
        }
    }

    public function proyek($mapel, $ke)
    {
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis', $this->nis)
            ->where('jenis_nilai_id', 6)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < $ke) {
            return '';
        } else {
            $nilai = $nilai->get()[$ke - 1];
            return $nilai->nilai;
        }
    }

    public function portofolio($mapel)
    {
        $nilai =Nilai::lastPeriode()
            ->where('siswa_nis',$this->nis)
            ->where('jenis_nilai_id',7)
            ->where('mapel_id', $mapel);
        if ($nilai->count() < 1){
            return 0;
        }else{
            $nilai = $nilai->first();
            return $nilai->nilai;
        }
    }

    public function predikatEkskul($ekskul)
    {
        $nilai = $this->ekskul()
                ->where('id',$ekskul)->first();
        return $nilai->pivot->predikat;
    }

    public function deskripsiEkskul($ekskul)
    {
        $nilai = $this->ekskul()
            ->where('id',$ekskul)->first();
        return $nilai->pivot->deskripsi;
    }

}

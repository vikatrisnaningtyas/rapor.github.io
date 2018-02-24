<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'grade'];
    public $timestamps = false;

    public function walikelas($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->belongsToMany(Guru::class, 'walikelas')->wherePivot('periode_id', $periode);
    }

    public function gurukelas($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->belongsToMany(Guru::class, 'guru_kelas')->wherePivot('periode_id', $periode);
    }

    public function siswa($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->belongsToMany(Siswa::class, 'kelas_siswa', 'kelas_id', 'siswa_nis')->wherePivot('periode_id', $periode);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskul';
    protected $fillable = ['nama_ekskul'];
    public $timestamps = false;

    public function siswa($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->belongsToMany(Siswa::class, 'ekskul_siswa', 'ekskul_id', 'siswa_nis')->wherePivot('periode_id', $periode);
    }

    public function guru($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->belongsToMany(Guru::class, 'ekskul_guru')->wherePivot('periode_id', $periode);
    }

}

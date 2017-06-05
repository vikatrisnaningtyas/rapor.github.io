<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['siswa_nis','guru_id','mapel_id','jenis_nilai_id','periode_id','nilai'];

    public function scopeLastPeriode($query)
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $query->where('periode_id', $periode->id);
    }

    public $timestamps = false;

}

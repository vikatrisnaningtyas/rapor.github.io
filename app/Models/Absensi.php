<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $fillable = ['siswa_nis', 'periode_id', 'sakit', 'ijin', 'alpha'];
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_nis');
    }
}

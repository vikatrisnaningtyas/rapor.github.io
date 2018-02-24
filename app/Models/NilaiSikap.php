<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    protected $table = 'nilai_sikap';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_nis');
    }
}

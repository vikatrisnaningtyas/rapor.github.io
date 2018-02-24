<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisNilai extends Model
{
    protected $table = 'jenis_nilai';
    protected $fillable = ['jenis_nilai', 'ket', 'aspek'];
    public $timestamps = false;

    public function bobot()
    {
        return $this->hasMany(Bobot::class);
    }
    
}

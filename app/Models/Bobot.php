<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';
    protected $fillable = ['jenis_nilai_id', 'periode_id', 'bobot'];
    public $timestamps = false;

    public function jenisNilai()
    {
        return $this->belongsTo(Bobot::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['nama_mapel', 'kelompok'];
    public $timestamps = false;

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }

    public function kkm($periode = '')
    {
        if ($periode == ''){
            $periode = Periode::orderBy('id','desc')->first();
            $periode = $periode->id;
        }
        return $this->hasMany(Kkm::class)->where('periode_id', $periode);
    }
    
}

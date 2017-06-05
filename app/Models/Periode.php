<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $fillable = ['tgl_awal', 'tgl_akhir', 'thn_akademik', 'semester'];
    public $timestamps = false;

    public function getTglAwalAttribute($value)
    {
        $tanggal = Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
        return $tanggal;
    }

    public function setTglAwalAttribute($value)
    {
        $this->attributes['tgl_awal'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getTglAkhirAttribute($value)
    {
        $tanggal = Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
        return $tanggal;
    }

    public function setTglAkhirAttribute($value)
    {
        $this->attributes['tgl_akhir'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }
}

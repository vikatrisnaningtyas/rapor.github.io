<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kkm extends Model
{
    protected $table = 'kkm';
    protected $fillable = ['mapel_id', 'periode_id', 'nilai'];
    public $timestamps = false;

    public function mapel()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsTo(Mapel::class)->where('periode_id', $periode->id);
    }
}

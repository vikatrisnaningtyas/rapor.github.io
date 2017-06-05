<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nip', 'nama_guru', 'mapel_id','user_id'];
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function walikelas()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsToMany(Kelas::class, 'walikelas')->wherePivot('periode_id', $periode->id);
    }

    public function gurukelas()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsToMany(Kelas::class, 'guru_kelas')->wherePivot('periode_id', $periode->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ekskul()
    {
        $periode = Periode::orderBy('id','desc')->first();
        return $this->belongsToMany(Ekskul::class, 'ekskul_guru')->wherePivot('periode_id', $periode->id);
    }

}
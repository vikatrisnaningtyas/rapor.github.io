<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentitasSekolah extends Model
{
    protected $table = identitas_sekolah;
    protected $fillable = ['nama_sekolah', 'npsn', 'nss', 'alamat', 'kode_pos',
        'telp', 'desa', 'kec', 'kab', 'provinsi', 'website', 'email'];
    public $timestamps = false;

}

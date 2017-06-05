<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deskom extends Model
{
    protected $table = 'deskom';
    protected $fillable = ['deskripsi_k12', 'deskripsi_k3', 'deskripsi_k4'];
    public $timestamps = 'false';
    
    
    
}

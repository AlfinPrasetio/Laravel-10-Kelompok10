<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosesbisnis extends Model
{
    use HasFactory;
    protected $table = "prosesbisnis";
    
    protected $primaryKey = "kode_proses_bisnis";
    protected $fillable = [
        'kode_proses_bisnis',
        'kode_layanan_bisnis',
        'nama_proses_bisnis',
        'deskripsi',
        'tahapan_proses_bisnis',
        'kategori_proses_bisnis',
    ];
    public $timestamps = false;
}

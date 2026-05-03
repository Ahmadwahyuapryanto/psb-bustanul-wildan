<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'nama_sekolah',
        'alamat_sekolah',
        'tahun_lulus',
        'prestasi',
    ];
}
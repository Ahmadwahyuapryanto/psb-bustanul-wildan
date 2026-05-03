<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $fillable = [
    'santri_id', 'nama_ayah', 'nik_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah',
    'nama_ibu', 'nik_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'no_wa_darurat'
];
    use HasFactory;
}

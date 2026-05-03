<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    // TAMBAHKAN KODE INI UNTUK MENGIZINKAN PENYIMPANAN DATA
    protected $fillable = [
        'santri_id',
        'jenis_berkas',
        'file_path',
    ];

    // ... (Jika ada fungsi relasi seperti public function santri() biarkan saja)
}
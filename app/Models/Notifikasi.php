<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    // Mengizinkan kolom-kolom ini untuk diisi secara massal (Mass Assignment)
    protected $fillable = [
        'santri_id',
        'judul',
        'pesan',
        'status',
    ];

    // Mendefinisikan relasi: Setiap notifikasi dimiliki oleh satu santri
    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
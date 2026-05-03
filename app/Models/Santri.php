<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // Hanya kolom ini yang boleh diisi melalui form
    protected $fillable = [
    'user_id', 'nama_lengkap', 'nik', 'tempat_lahir', 
    'tanggal_lahir', 'jenis_kelamin', 'alamat', 'provinsi', 
    'kabupaten', 'pas_foto', 'status_pendaftaran', 'tahap_pendaftaran'
];

    // Relasi ke User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Tambahkan ini di dalam class Santri
    public function berkas()
    {
        return $this->hasMany(Berkas::class);
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan perintah untuk menambahkan kolom baru ke tabel.
     */
    public function up(): void
    {
        Schema::table('santris', function (Blueprint $table) {
            // Menambahkan kolom jadwal_tes dengan tipe dateTime
            // nullable() digunakan agar data boleh kosong untuk pendaftar baru
            // after() digunakan untuk meletakkan kolom ini secara rapi setelah status_pendaftaran
            $table->dateTime('jadwal_tes')->nullable()->after('status_pendaftaran');
        });
    }

    /**
     * Balikkan keadaan (hapus kolom) jika migrasi ini dibatalkan (rollback).
     */
    public function down(): void
    {
        Schema::table('santris', function (Blueprint $table) {
            // Menghapus kolom jika kita melakukan php artisan migrate:rollback
            $table->dropColumn('jadwal_tes');
        });
    }
};
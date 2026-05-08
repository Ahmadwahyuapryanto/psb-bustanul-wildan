<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
            $table->enum('jenis_berkas', ['kartu_keluarga', 'ijazah', 'akta_kelahiran']);
            $table->string('file_path'); 
            // Penambahan kolom status untuk mengakomodasi Activity & Sequence Diagram Verifikasi Berkas
            $table->enum('status', ['menunggu', 'valid', 'tidak valid'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
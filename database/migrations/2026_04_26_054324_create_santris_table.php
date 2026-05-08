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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
            
            $table->string('nama_lengkap');
            $table->string('nik', 16)->unique(); 
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('provinsi')->nullable(); 
            $table->string('kabupaten')->nullable(); 
            $table->string('pas_foto')->nullable(); 
            
            $table->integer('tahap_pendaftaran')->default(1); 
            // Menambahkan opsi 'cadangan' agar sistem tidak error saat pengontrol mengatur status ini
            $table->enum('status_pendaftaran', ['menunggu', 'diverifikasi', 'lulus', 'tidak lulus', 'cadangan'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
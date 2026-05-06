<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id'); // Relasi ke tabel santri
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            $table->year('tahun_lulus');
            $table->text('prestasi')->nullable();
            $table->timestamps();

            // Opsional: Jika tabel santrimu bernama 'santris'
            // $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};

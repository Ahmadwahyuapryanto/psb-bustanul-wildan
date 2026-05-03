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
    Schema::create('orang_tuas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
        
        // Data Ayah
        $table->string('nama_ayah');
        $table->string('nik_ayah', 16);
        $table->string('pendidikan_ayah');
        $table->string('pekerjaan_ayah');
        $table->string('penghasilan_ayah');

        // Data Ibu
        $table->string('nama_ibu');
        $table->string('nik_ibu', 16);
        $table->string('pendidikan_ibu');
        $table->string('pekerjaan_ibu');
        $table->string('penghasilan_ibu');

        // Kontak Darurat
        $table->string('no_wa_darurat');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tuas');
    }
};

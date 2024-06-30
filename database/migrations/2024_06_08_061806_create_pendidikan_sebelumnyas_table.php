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
        Schema::create('pendidikan_sebelumnyas', function (Blueprint $table) {
            $table->id();

            // Pendidikan :
            $table->string('asal_sekolah');
            $table->string('NPSN');
            $table->string('jenjang');
            $table->string('status_sekolah');
            $table->string('kecamatan_sekolah');
            $table->string('alamat_sekolah');
            $table->string('daftar_nik')->unique();

            $table->string('no_peserta_ujian')->nullable();

            $table->foreign('daftar_nik')
                ->references('NIK')
                ->on('daftars')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_sebelumnyas');
    }
};

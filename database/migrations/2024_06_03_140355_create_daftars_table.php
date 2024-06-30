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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();

            // data santri
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('NIK')->unique();
            $table->string('No_KK');
            $table->string('anak_ke');
            $table->string('dari_saudara');
            $table->string('hobi');
            $table->string('cita_cita');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('kecamatan');
            $table->string('RT');
            $table->string('RW');
            $table->string('kode_pos');
            $table->string('alamat');
            $table->string('email');
            $table->enum('pembayaran', ['belum', 'lunas'])->default('belum');
            $table->enum('status_diterima', ['belum', 'diterima'])->default('belum');

            // Berkas Pendukung : 
            $table->string('pas_foto');
            $table->string('file_kk');
            $table->string('file_akta');
            $table->string('file_skhu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};

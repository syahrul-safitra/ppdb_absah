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
        Schema::create('data_orang_tuas', function (Blueprint $table) {
            $table->id();

            // penghasilan orang tua/wali : 
            $table->string('penghasilan_org_tua');

            // // data ayah :
            $table->string('nama_ayah');
            $table->string('no_kk_ayah');
            $table->string('nik_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');

            $table->string('kecamatan_ayah');
            $table->string('alamat_ayah');

            $table->string('status_ayah');
            $table->string('no_hp_ayah');
            $table->string('no_wa_ayah');

            // data ibu :
            $table->string('nama_ibu');
            $table->string('no_kk_ibu');
            $table->string('nik_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');

            $table->string('kecamatan_ibu');
            $table->string('alamat_ibu');

            $table->string('status_ibu');
            $table->string('no_hp_ibu');
            $table->string('no_wa_ibu');
            $table->string('daftar_nik')->unique();
            $table->timestamps();

            // Data Wali : 
            $table->string('nama_wali_santri')->nullable();
            $table->string('no_kk_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('kecamatan_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('no_wa_wali')->nullable();

            $table->foreign('daftar_nik')
                ->references('NIK')
                ->on('daftars')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orang_tuas');
    }
};

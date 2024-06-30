<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    use HasFactory;

    protected $fillable = [
        'penghasilan_org_tua',
        'nama_ayah',
        'no_kk_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'kecamatan_ayah',
        'alamat_ayah',
        'status_ayah',
        'no_hp_ayah',
        'no_wa_ayah',

        // data ibu : 
        'nama_ibu',
        'no_kk_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'kecamatan_ibu',
        'alamat_ibu',
        'status_ibu',
        'no_hp_ibu',
        'no_wa_ibu',

        // data wali : 
        'nama_wali_santri',
        'no_kk_wali',
        'nik_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'alamat_wali',
        'kecamatan_wali',
        'no_hp_wali',
        'no_wa_wali',

        // foreign key : 
        'daftar_nik'
    ];
}

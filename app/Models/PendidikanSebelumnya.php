<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanSebelumnya extends Model
{
    use HasFactory;

    protected $fillable = [
        'asal_sekolah',
        'NPSN',
        'jenjang',
        'status_sekolah',
        'kecamatan_sekolah',
        'alamat_sekolah',
        'no_peserta_ujian',
        'daftar_nik'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'NIK',
        'No_KK',
        'anak_ke',
        'dari_saudara',
        'tinggi_badan',
        'berat_badan',
        'hobi',
        'cita_cita',
        'kecamatan',
        'RT',
        'RW',
        'kode_pos',
        'alamat',
        'email',
        'pas_foto',
        'file_kk',
        'file_akta',
        'file_skhu',
        'pembayaran',
        'status_diterima'
    ];

    public function dataOrangTua()
    {
        return $this->hasOne(DataOrangTua::class, 'daftar_nik', 'NIK');
    }

    public function pendidikanSebelumnya()
    {
        return $this->hasOne(PendidikanSebelumnya::class, 'daftar_nik', 'NIK');
    }
}

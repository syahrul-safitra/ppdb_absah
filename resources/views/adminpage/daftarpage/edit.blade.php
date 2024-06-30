<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('adminpage/vendors/select2/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminpage/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- captcha --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
</head>

<body>

    <div class="container">
        <div class="py-5 text-center mx-auto">
            <img src="https://psb.abshah.ponpes.id/public/images/logo-ponpes.png" alt="" width="72"
                height="72">
            <h2>Edit Data Santri</h2>
        </div>
    </div>

    {{-- form --}}
    <div class="container">
        <form action="{{ url('daftar/' . $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row border py-2 rounded">
                <div class="col-lg-6 border rounded">
                    <h4>Data Santri</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- nama --}}
                    <div class="mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') 'is-invalid' @enderror"
                            id="nama" placeholder="Nama" value="{{ @old('nama', $data->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- jenis kelamin --}}
                    <div>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios3"
                                value="Laki-Laki"
                                {{ @old('jenis_kelamin', $data->jenis_kelamin) == 'Laki-Laki' ? 'checked' : '' }}>
                            Laki-Laki
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios3"
                                value="Perempuan"
                                {{ @old('jenis_kelamin', $data->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                            Perempuan
                        </label>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tempat Lahir --}}
                    <div class="mb-3">
                        <label for="tempat_tgl_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir"
                            class="form-control @error('tempat_lahir') 'is-invalid' @enderror" id="tanggal_lahir"
                            placeholder="Tempat Lahir" value="{{ @old('tempat_lahir', $data->tempat_lahir) }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- tempat_lahir --}}
                    <div class="mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                            class="form-control @error('tanggal_lahir') 'is-invalid' @enderror" id="tanggal_lahir"
                            value="{{ @old('tanggal_lahir', $data->tanggal_lahir) }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Nik --}}
                    <div class="mb-3">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control @error('NIK') 'is-invalid' @enderror" name="NIK"
                            id="nik" placeholder="NIK" minlength="16" value="{{ @old('NIK', $data->NIK) }}">
                        @error('NIK')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="text-primary fs-6">
                            <p class="">* Nomor Induk Kependudukan/No KTP. </p>
                            <p> * Jika belum memiliki KTP, No NIK dapat ditemukan dalam Kartu
                                Keluarga.
                            </p>
                        </div>
                    </div>

                    {{-- No KK --}}
                    <div class="mb-3">
                        <label for="no_kk">NO KK</label>
                        <input type="number" class="form-control @error('No_KK') 'is-invalid' @enderror" name="No_KK"
                            id="no_kk" placeholder="No KK" minlength="16"
                            value="{{ @old('No_KK', $data->No_KK) }}">
                        @error('No_KK')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Anak Ke --}}
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">Anak Ke</span>
                            </div>
                            <input type="number" name="anak_ke"
                                class="form-control @error('anak_ke') 'is-invalid' @enderror"
                                value="{{ @old('anak_ke', $data->anak_ke) }}" placeholder="Anak Ke">
                        </div>
                        @error('anak_ke')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Dari Saudara --}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Dari</span>
                        </div>
                        <input type="number" name="dari_saudara"
                            class="form-control @error('dari_saudara') 'is-invalid' @enderror"
                            placeholder="Dari Saudara" value="{{ @old('dari_saudara', $data->dari_saudara) }}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary text-wthie">Saudara</span>
                        </div>
                    </div>
                    @error('dari_saudara')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    {{-- Tinggi Badan --}}
                    <div class="mb-3">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="number" name="tinggi_badan"
                            class="form-control @error('tinggi_badan') 'is-invalid' @enderror" id="tinggi_badan"
                            placeholder="Tinggi Badan" value="{{ @old('tinggi_badan', $data->tinggi_badan) }}">
                        @error('tinggi_badan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Berat Badan --}}
                    <div class="mb-3">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="number" name="berat_badan"
                            class="form-control @error('berat_badan') 'is-invalid' @enderror" id="berat_badan"
                            placeholder="Berat Badan" value="{{ @old('berat_badan', $data->berat_badan) }}">
                        @error('berat_badan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="hobi">Hobi</label>
                        <input type="text" name="hobi"
                            class="form-control @error('hobi') 'is-invalid' @enderror" id="hobi"
                            placeholder="Hobi" value="{{ @old('hobi', $data->hobi) }}">
                        @error('hobi')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cita_cita">Cita-Cita</label>
                        <input type="text" name="cita_cita"
                            class="form-control @error('cita_cita') 'is-invalid' @enderror" id="cita_cita"
                            placeholder="Cita-Cita" value="{{ @old('cita_cita', $data->cita_cita) }}">
                        @error('cita_cita')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <select class=" " style="width: 100%" name="kecamatan" id="kecamatan">
                            @if (@old('kecamatan', $data->kecamatan))
                                <option value="{{ @old('kecamatan', $data->kecamatan) }}" selected>
                                    {{ @old('kecamatan', $data->kecamatan) }}</option>
                            @else
                                <option value="">--Pilih---</option>
                            @endif
                        </select>
                        @error('kecamatan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="RT" class="form-label">RT</label>
                        <input type="text" name="RT"
                            class="form-control @error('RT') 'is-invalid' @enderror" id="RT" placeholder="RT"
                            value="{{ @old('RT', $data->RT) }}">
                        @error('RT')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="RW" class="form-label">RW</label>
                        <input type="text" name="RW"
                            class="form-control @error('RW') 'is-invalid' @enderror" id="RW" placeholder="RW"
                            value="{{ @old('RW', $data->RW) }}">
                        @error('RW')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-control" id="kode_pos"
                            placeholder="Kode Pos" value="{{ @old('kode_pos', $data->kode_pos) }}">
                        <div class="text-primary">
                            <p>Untuk mencari kode pos bisa bisa klik tautan <a href="https://nomorkodepos.com/">ini</a>
                            </p>
                        </div>
                        @error('kode_pos')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat"
                            class="form-label @error('alamat') 'is-invalid' @enderror">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat"
                            placeholder="Alamat Lengkap" value="{{ @old('alamat', $data->alamat) }}">
                        @error('alamat')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control @error('email') 'is-invalid' @enderror" id="email"
                            placeholder="email" value="{{ @old('email', $data->email) }}">
                        @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h4 class="card-title">Berkas Pendukung </h4>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pas Foto</label>
                        <input class="form-control" name="pas_foto" type="file" id="formFile">
                        @error('pas_foto')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File Kartu Keluarga (KK)</label>
                        <input class="form-control" name="file_kk" type="file" id="formFile">
                        @error('file_kk')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File Akta Lahir</label>
                        <input class="form-control" name="file_akta" type="file" id="formFile">
                        @error('file_akta')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File SKHU (Surat Keterangan
                            Lulus jika ada)</label>
                        <input class="form-control" name="file_skhu" type="file" id="formFile">
                        @error('file_akta')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <h4 class="card-title">Asal Sekolah Calon Santri</h4>

                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control @error('asal_sekolah') 'is-invalid' @enderror"
                            name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah"
                            value="{{ @old('asal_sekolah', $data->pendidikanSebelumnya->asal_sekolah) }}">
                        @error('asal_sekolah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="NPSN" class="form-label">NPSN</label>
                        <input type="text" class="form-control @error('NPSN') 'is-invalid' @enderror"
                            name="NPSN" id="NPSN" placeholder="NPSN"
                            value="{{ @old('NPSN', $data->pendidikanSebelumnya->NPSN) }}">
                        @error('NPSN')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Jenjang Sekolah --}}
                    <div class="mb-3">
                        <label for="jenjang" class="form-label">Jenjang</label>
                        <select class="form-control" name="jenjang" id="jenjang">
                            @if (@old('jenjang', $data->pendidikanSebelumnya->jenjang))
                                @foreach ($dataJenjang as $item)
                                    @if ($item == @old('jenjang', $data->pendidikanSebelumnya->jenjang))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataJenjang as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('jenjang')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Jenjang Sekolah --}}
                    <div class="mb-3">
                        <label for="status_sekolah" class="form-label">Status Sekolah</label>
                        <select class="form-control" name="status_sekolah" id="status_sekolah">
                            @if (@old('status_sekolah', $data->pendidikanSebelumnya->status_sekolah))
                                @foreach ($dataStatusSekolah as $item)
                                    @if ($item == @old('status_sekolah', $data->pendidikanSebelumnya->status_sekolah))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataStatusSekolah as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('status_sekolah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kecamatan_sekolah">Kecamatan Sekolah</label>
                        <select class="js-example-basic-single" style="width: 100%" name="kecamatan_sekolah"
                            id="kecamatan_sekolah">
                            @if (@old('kecamatan_sekolah', $data->pendidikanSebelumnya->kecamatan_sekolah))
                                <option
                                    value="{{ @old('kecamatan_sekolah', $data->pendidikanSebelumnya->kecamatan_sekolah) }}"
                                    selected>
                                    {{ @old('kecamatan_sekolah', $data->pendidikanSebelumnya->kecamatan_sekolah) }}
                                </option>
                            @else
                                <option value="">--Pilih--</option>
                            @endif
                        </select>
                        @error('kecamatan_sekolah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
                        <input type="text" class="form-control @error('alamat_sekolah') 'is-invalid' @enderror"
                            name="alamat_sekolah" id="alamat_sekolah" placeholder="alamat_sekolah"
                            value="{{ @old('alamat_sekolah', $data->pendidikanSebelumnya->alamat_sekolah) }}">
                        @error('alamat_sekolah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_peserta_ujian" class="form-label">No Peserta Ujian
                            <span class="text-danger">jika ada</span></label>
                        <input type="text" class="form-control @error('no_peserta_ujian') 'is-invalid' @enderror"
                            name="no_peserta_ujian" id="no_peserta_ujian"
                            value="{{ @old('no_peserta_ujian', $data->pendidikanSebelumnya->no_peserta_ujian) }}"
                            placeholder="no_peserta_ujian">
                        @error('no_peserta_ujian')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6 border rounded">

                    <h4> Data Penghasilan Orang Tua </h4>

                    <div class="mb-3">
                        <label for="penghasilan_org_tua">Penghasilan Orang Tua</label>
                        <select class="form-control" name="penghasilan_org_tua" id="penghasilan_org_tua">
                            <option value="">--Pilih--</option>
                            @if (old('penghasilan_org_tua', $data->dataOrangTua->penghasilan_org_tua))
                                @foreach ($dataPenghasilan as $penghasilan)
                                    @if (old('penghasilan_org_tua', $data->dataOrangTua->penghasilan_org_tua) == $penghasilan)
                                        <option value="{{ $penghasilan }}" selected>
                                            {{ $penghasilan }}</option>
                                    @else
                                        <option value="{{ $penghasilan }}">
                                            {{ $penghasilan }}
                                        </option>
                                    @endif
                                @endforeach
                            @else
                                @foreach ($dataPenghasilan as $penghasilan)
                                    <option value="{{ $penghasilan }}">{{ $penghasilan }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('penghasilan_orang_tua')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h4>Data Ayah</h4>

                    {{-- Nama Ayah Kandung --}}


                    <div class="mb-3">
                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control @error('nama_ayah') 'is-invalid' @enderror"
                            name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah"
                            value="{{ @old('nama_ayah', $data->dataOrangTua->nama_ayah) }}">
                        @error('nama_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No KK Ayah --}}
                    <div class="mb-3">
                        <label for="no_kk_ayah" class="form-label">No KK Ayah</label>
                        <input type="text" class="form-control @error('no_kk_ayah') 'is-invalid' @enderror"
                            name="no_kk_ayah" id="no_kk_ayah" placeholder="No KK Ayah" minlength="16"
                            value="{{ @old('no_kk_ayah', $data->dataOrangTua->no_kk_ayah) }}">
                        @error('no_kk_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Nik Ayah --}}
                    <div class="mb-3">
                        <label for="nik_ayah" class="form-label">NIK Ayah</label>
                        <input type="text" class="form-control @error('nik_ayah') 'is-invalid' @enderror"
                            name="nik_ayah" id="nik_ayah" placeholder="NIK Ayah" minlength="16"
                            value="{{ @old('nik_ayah', $data->dataOrangTua->nik_ayah) }}">
                        @error('nik_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tempat Lahir Ayah --}}
                    <div class="mb-3">
                        <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control @error('tempat_lahir_ayah') 'is-invalid' @enderror"
                            name="tempat_lahir_ayah" id="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah"
                            value="{{ @old('tempat_lahir_ayah', $data->dataOrangTua->tempat_lahir_ayah) }}">
                        @error('tempat_lahir_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tanggal Lahir Ayah --}}
                    <div class="mb-3">
                        <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir Ayah</label>
                        <input type="date"
                            class="form-control @error('tanggal_lahir_ayah') 'is-invalid' @enderror"
                            name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah"
                            value="{{ @old('tanggal_lahir_ayah', $data->dataOrangTua->tanggal_lahir_ayah) }}">
                        @error('tanggal_lahir_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pendidikan  Ayah --}}
                    <div class="mb-3">
                        <label for="pendidikan_ayah">Pendidikan Ayah</label>
                        <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                            <option value="">--Pilih--</option>

                            @if (@old('pendidikan_ayah', $data->dataOrangTua->pendidikan_ayah))
                                @foreach ($dataPendidikan as $item)
                                    @if ($item == @old('pendidikan_ayah', $data->dataOrangTua->pendidikan_ayah))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                @foreach ($dataPendidikan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pendidikan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pekerjaan Ayah --}}
                    <div class="mb-3">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                            <option value="">--Pilih--</option>

                            @if (@old('pekerjaan_ayah', $data->dataOrangTua->pekerjaan_ayah))
                                @foreach ($dataPekerjaan as $item)
                                    @if ($item == @old('pekerjaan_ayah', $data->dataOrangTua->pekerjaan_ayah))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                @foreach ($dataPekerjaan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>

                        @error('pekerjaan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kecamatan_ayah">Kecamatan</label>
                        <select class="" style="width: 100%" name="kecamatan_ayah" id="kecamatan_ayah">
                            @if (@old('kecamatan_ayah', $data->dataOrangTua->kecamatan_ayah))
                                <option value="{{ @old('kecamatan_ayah', $data->dataOrangTua->kecamatan_ayah) }}">
                                    {{ @old('kecamatan_ayah', $data->dataOrangTua->kecamatan_ayah) }}</option>
                            @else
                                <option value="">--Pilih--</option>
                            @endif
                        </select>
                        @error('kecamatan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_ayah">Status Ayah</label>
                        <select class="form-control" name="status_ayah" id="status_ayah">
                            <option value="">--Pilih--</option>

                            @if (@old('status_ayah', $data->dataOrangTua->status_ayah))
                                @foreach ($dataStatus as $item)
                                    @if ($item == @old('status_ayah', $data->dataOrangTua->status_ayah))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                @foreach ($dataStatus as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('status_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Alamat Ayah --}}
                    <div class="mb-3">
                        <label for="alamat_ayah" class="form-label">Alamat Ayah</label>
                        <input type="text" class="form-control @error('alamat_ayah') 'is-invalid' @enderror"
                            name="alamat_ayah" id="alamat_ayah"
                            value="{{ @old('alamat_ayah', $data->dataOrangTua->alamat_ayah) }}"
                            placeholder="Alamat Ayah">
                        @error('alamat_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No HP Ayah --}}
                    <div class="mb-3">
                        <label for="no_hp_ayah" class="form-label">No HP Ayah</label>
                        <input type="text" class="form-control @error('no_hp_ayah') 'is-invalid' @enderror"
                            name="no_hp_ayah" id="no_hp_ayah" placeholder="No HP Ayah"
                            value="{{ @old('no_hp_ayah', $data->dataOrangTua->no_hp_ayah) }}">
                        @error('no_hp_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No WA Ayah --}}
                    <div class="mb-3">
                        <label for="no_wa_ayah" class="form-label">No WA Ayah</label>
                        <input type="text" class="form-control @error('no_wa_ayah') 'is-invalid' @enderror"
                            name="no_wa_ayah" id="no_wa_ayah"
                            value="{{ @old('no_wa_ayah', $data->dataOrangTua->no_wa_ayah) }}"
                            placeholder="No WA Ayah">
                        @error('no_wa_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Data Ibu --}}
                    <h4 class="card-title">Data Ibu</h4>

                    {{-- Nama Ibu --}}
                    <div class="mb-3">
                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ibu') 'is-invalid' @enderror"
                            name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu"
                            value="{{ @old('nama_ibu', $data->dataOrangTua->nama_ibu) }}">
                        @error('nama_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No KK Ibu --}}
                    <div class="mb-3">
                        <label for="no_kk_ibu" class="form-label">No KK Ibu</label>
                        <input type="text" class="form-control @error('no_kk_ibu') 'is-invalid' @enderror"
                            name="no_kk_ibu" id="no_kk_ibu" placeholder="No KK Ayah" minlength="16"
                            value="{{ @old('no_kk_ibu', $data->dataOrangTua->no_kk_ibu) }}">
                        @error('no_kk_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Nik Ibu --}}
                    <div class="mb-3">
                        <label for="nik_ibu" class="form-label">NIK Ibu</label>
                        <input type="text" class="form-control @error('nik_ibu') 'is-invalid' @enderror"
                            name="nik_ibu" id="nik_ibu" placeholder="NIK Ibu" minlength="16"
                            value="{{ @old('nik_ibu', $data->dataOrangTua->nik_ibu) }}">
                        @error('nik_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tempat Lahir Ibu --}}
                    <div class="mb-3">
                        <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir Ibu</label>
                        <input type="text" class="form-control @error('tempat_lahir_ibu') 'is-invalid' @enderror"
                            name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu"
                            value="{{ @old('tempat_lahir_ibu', $data->dataOrangTua->tempat_lahir_ibu) }}">
                        @error('tempat_lahir_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tanggal Lahir Ibu --}}
                    <div class="mb-3">
                        <label for="tanggal_lahir_ibut" class="form-label">Tanggal Lahir Ibu</label>
                        <input type="date" class="form-control @error('tanggal_lahir_ibu') 'is-invalid' @enderror"
                            name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu"
                            value="{{ @old('tanggal_lahir_ibu', $data->dataOrangTua->tanggal_lahir_ibu) }}">
                        @error('tanggal_lahir_ibut')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pendidikan  Ibu --}}
                    <div class="mb-3">
                        <label for="pendidikan_ibu">Pendidikan Ibu</label>
                        <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                            @if (@old('pendidikan_ibu', $data->dataOrangTua->pendidikan_ibu))
                                @foreach ($dataPendidikan as $item)
                                    @if ($item == @old('pendidikan_ibu', $data->dataOrangTua->pendidikan_ibu))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option>--Pilih--</option>
                                @foreach ($dataPendidikan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pendidikan_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pekerjaan Ibu --}}
                    <div class="mb-3">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                            @if (@old('pekerjaan_ibu', $data->dataOrangTua->pekerjaan_ibu))
                                @foreach ($dataPekerjaan as $item)
                                    @if ($item == @old('pekerjaan_ibu', $data->dataOrangTua->pekerjaan_ibu))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataPekerjaan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pekerjaan_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- alamat Ibu --}}

                    <div class="mb-3">
                        <label for="kecamatan_ibu">Kecamatan</label>
                        <select class="js-example-basic-single" style="width: 100%" name="kecamatan_ibu"
                            id="kecamatan_ibu">
                            @if (old('kecamatan_ibu', $data->dataOrangTua->kecamatan_ibu))
                                <option value="{{ @old('kecamatan_ibu', $data->dataOrangTua->kecamatan_ibu) }}"
                                    selected>{{ @old('kecamatan_ibu', $data->dataOrangTua->kecamatan_ibu) }}
                                </option>
                            @else
                                <option value="">--Pilih--</option>
                            @endif
                        </select>
                        @error('kecamatan_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_ibu">Status Ibu</label>
                        <select class="form-control" name="status_ibu" id="status_ibu">
                            @if (@old('status_ibu', $data->dataOrangTua->status_ibu))
                                @foreach ($dataStatus as $item)
                                    @if ($item == @old('status_ibu', $data->dataOrangTua->status_ibu))
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataStatus as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('status_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Alamat Ibu --}}
                    <div class="mb-3">
                        <label for="alamat_ibu" class="form-label">Alamat Ibu</label>
                        <input type="text" class="form-control @error('alamat_ibu') 'is-invalid' @enderror"
                            name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Ibu"
                            value="{{ @old('alamat_ibu', $data->dataOrangTua->alamat_ibu) }}">
                        @error('alamat_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_hp_ibu" class="form-label">No HP Ibu</label>
                        <input type="text" class="form-control @error('no_hp_ibu') 'is-invalid' @enderror"
                            name="no_hp_ibu" id="no_hp_ibu"
                            value="{{ @old('no_hp_ibu', $data->dataOrangTua->no_hp_ibu) }}" placeholder="No HP Ibu">
                        @error('no_hp_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no__wa_ibu" class="form-label">No WA Ibu</label>
                        <input type="text" class="form-control @error('no_wa_ibu') 'is-invalid' @enderror"
                            name="no_wa_ibu" id="no_wa_ibu" placeholder="No WA Ibu"
                            value="{{ @old('no_wa_ibu', $data->dataOrangTua->no_wa_ibu) }}">
                        @error('no_wa_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h4 class="card-title">Data Wali <span class="text-danger">Jika Ada</span></h4>

                    <div class="mb-3">
                        <label for="nama_wali_santri" class="form-label">Nama Wali Santri</label>
                        <input type="text" class="form-control @error('nama_wali_santri') is-invalid @enderror"
                            name="nama_wali_santri" id="nama_wali_santri" placeholder="Nama Wali Santri"
                            value="{{ @old('nama_wali_santri', $data->dataOrangTua->nama_wali_santri) }}">
                        @error('nama_wali_santri')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_kk_wali" class="form-label">No KK Wali</label>
                        <input type="text" class="form-control @error('no_kk_wali') is-invalid @enderror"
                            name="no_kk_wali" id="no_kk_wali" placeholder="No KK Wali"
                            value="{{ @old('no_kk_wali', $data->dataOrangTua->no_kk_wali) }}">
                        @error('no_kk_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nik_wali" class="form-label">NIK Wali</label>
                        <input type="text" class="form-control @error('no_kk_wali') is-invalid @enderror"
                            name="nik_wali" id="nik_wali"
                            value="{{ @old('nik_wali', $data->dataOrangTua->nik_wali) }}" placeholder="NIK WALI">
                        @error('no_kk_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tempat_lahir_wali" class="form-label">Tempat Lahir Wali</label>
                        <input type="text" class="form-control @error('tempat_lahir_wali') is-invalid @enderror"
                            name="tempat_lahir_wali" id="no_kk_wali"
                            value="{{ @old('tempat_lahir_wali', $data->dataOrangTua->tempat_lahir_wali) }}"
                            placeholder="Tempat Lahir Wali">
                        @error('tempat_lahir_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir_wali" class="form-label">Tanggal Lahir Wali</label>
                        <input type="date" class="form-control @error('tanggal_lahir_wali') is-invalid @enderror"
                            name="tanggal_lahir_wali" id="tanggal_lahir_wali"
                            value="{{ @old('tanggal_lahir_wali', $data->dataOrangTua->tanggal_lahir_wali) }}"
                            placeholder="Tanggal Lahir Wali">
                        @error('tempat_lahir_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pendidikan  Wali --}}
                    <div class="mb-3">
                        <label for="pendidikan_wali">Pendidikan Wali</label>
                        <select class="form-control" name="pendidikan_wali" id="pendidikan_wali">
                            @if (@old('pendidikan_wali', $data->dataOrangTua->pendidikan_wali))
                                @foreach ($dataPendidikan as $item)
                                    @if ($item == @old('pendidikan_wali', $data->dataOrangTua->pendidikan_wali))
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataPendidikan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pendidikan_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pekerjaan Wali --}}
                    <div class="mb-3">
                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                        <select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                            @if (@old('pekerjaan_wali', $data->dataOrangTua->pekerjaan_wali))
                                @foreach ($dataPekerjaan as $item)
                                    @if ($item == @old('pekerjaan_wali', $data->dataOrangTua->pekerjaan_wali))
                                        <option
                                            value="{{ old('pekerjaan_wali', $data->dataOrangTua->pekerjaan_wali) }}"
                                            selected>
                                            {{ old('pekerjaan_wali', $data->dataOrangTua->pekerjaan_wali) }}</option>
                                    @else
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="">--Pilih--</option>
                                @foreach ($dataPekerjaan as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pekerjaan_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kecamatan_wali">Kecamatan Wali</label>
                        <select class="js-example-basic-single" style="width: 100%" name="kecamatan_wali"
                            id="kecamatan_wali">
                            @if (@old('kecamatan_wali', $data->dataOrangTua->kecamatan_wali))
                                <option value="{{ @old('kecamatan_wali', $data->dataOrangTua->kecamatan_wali) }}">
                                    {{ @old('kecamatan_wali', $data->dataOrangTua->kecamatan_wali) }}</option>
                            @else
                                <option value="">--Pilih--</option>
                            @endif

                        </select>
                        @error('kecamatan_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Alamat Wali --}}
                    <div class="mb-3">
                        <label for="alamat_wali" class="form-label">Alamat Wali</label>
                        <input type="text"
                            class="form-control @error('alamat_wali', $data->dataOrangTua->alamt_wali) 'is-invalid' @enderror"
                            name="alamat_wali" id="alamat_wali"
                            value="{{ @old('alamat_wali', $data->dataOrangTua->alamat_wali) }}"
                            placeholder="Alamat Wali">
                        @error('alamat_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No HP Ayah --}}
                    <div class="mb-3">
                        <label for="no_hp_wali" class="form-label">No HP Wali</label>
                        <input type="text" class="form-control @error('no_hp_wali') 'is-invalid' @enderror"
                            name="no_hp_wali" id="no_hp_wali"
                            value="{{ @old('no_hp_wali', $data->dataOrangTua->no_hp_wali) }}"
                            placeholder="No Wa Wali">
                        @error('no_hp_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- No WA Wali --}}
                    <div class="mb-3">
                        <label for="no_wa_wali" class="form-label">No WA Wali</label>
                        <input type="text" class="form-control @error('no_wa_wali') 'is-invalid' @enderror"
                            name="no_wa_wali" id="no_wa_wali"
                            value="{{ @old('no_wa_wali', $data->dataOrangTua->no_wa_wali) }}"
                            placeholder="No Wa Wali">
                        @error('no_wa_wali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="{{ asset('userpage/js/jquery-3.2.1.min.js') }}"></script>
{{-- <script src="{{ asset('adminpage/js/select2.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('userpage/js/listCountries.js') }}"></script>

</html>

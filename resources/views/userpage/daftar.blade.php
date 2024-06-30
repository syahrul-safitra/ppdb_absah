<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/ti-icons/  css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{--
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/ti-icons/css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminpage/js/select.dataTables.min.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpage/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

    <!-- End plugin css for this page -->


    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('adminpage/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('adminpage/images/favicon.png') }}" />
</head>

<body>

    <div class="container-scroller">
        {{-- <div class="col-lg-12"> --}}
        <!-- partial -->
        {{-- <div class="main-panel"> --}}
        <div class="content-wrapper">
            <div class="container">

                <div class="text-center mt-10 mb-5">
                    <h2>Pendaftaran Santri Baru</h2>
                </div>

                {{-- <div class="row"> --}}
                <form class="row" action="{{ url('dashboard/daftar') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="ti-user menu-icon"></i> Data Santri</h4>
                                <div class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Nama Lengkap</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') 'is-invalid' @enderror"
                                            id="exampleInputUsername1" placeholder="Nama Lengkap"
                                            value="{{ @old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">

                                        <label for="">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin"
                                                    id="optionsRadios3" value="Laki-Laki"
                                                    {{ @old('jenis_kelamin') == 'Laki-Laki' ? 'checked' : '' }}>
                                                Laki-Laki
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin"
                                                    id="optionsRadios3" value="Perempuan"
                                                    {{ @old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
                                                Perempuan
                                            </label>
                                        </div>

                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_tgl_lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir"
                                            class="form-control @error('tempat_lahir') 'is-invalid' @enderror"
                                            id="tanggal_lahir" placeholder="Tempat Lahir"
                                            value="{{ @old('tempat_lahir') }}">
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') 'is-invalid' @enderror"
                                            id="tanggal_lahir" placeholder="Tanggal Lahir"
                                            value="{{ @old('tanggal_lahir') }}">
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="number" class="form-control @error('NIK') 'is-invalid' @enderror"
                                            name="NIK" id="nik" placeholder="NIK" minlength="16"
                                            value="{{ @old('NIK') }}">
                                        @error('NIK')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="text-primary">
                                            <p>* Nomor Induk Kependudukan/No KTP. </p>
                                            <p> * Jika belum memiliki KTP, No NIK dapat ditemukan dalam Kartu
                                                Keluarga.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_kk">NO KK</label>
                                        <input type="number"
                                            class="form-control @error('No_KK') 'is-invalid' @enderror" name="No_KK"
                                            id="no_kk" placeholder="No KK" minlength="16"
                                            value="{{ @old('No_KK') }}">
                                        @error('No_KK')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">Anak Ke</span>
                                            </div>
                                            <input type="number" name="anak_ke"
                                                class="form-control @error('anak_ke') 'is-invalid' @enderror"
                                                placeholder="Anak Ke" value="{{ @old('anak_Ke') }}">
                                        </div>
                                        @error('anak_ke')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">Dari</span>
                                            </div>
                                            <input type="number" name="dari_saudara"
                                                class="form-control @error('dari_saudara') 'is-invalid' @enderror"
                                                placeholder="Dari Saudara" value="{{ @old('dari_saudara') }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-wthie">Saudara</span>
                                            </div>
                                        </div>
                                        @error('dari_saudara')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan</label>
                                        <input type="number" name="tinggi_badan"
                                            class="form-control @error('tinggi_badan') 'is-invalid' @enderror"
                                            id="tinggi_badan" placeholder="Tinggi Badan"
                                            value="{{ @old('tinggi_badan') }}">
                                        @error('tinggi_badan')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="number" name="berat_badan"
                                            class="form-control @error('berat_badan') 'is-invalid' @enderror"
                                            id="berat_badan" placeholder="Berat Badan"
                                            value="{{ @old('berat_badan') }}">
                                        @error('berat_badan')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="hobi">Hobi</label>
                                        <input type="text" name="hobi"
                                            class="form-control @error('hobi') 'is-invalid' @enderror" id="hobi"
                                            placeholder="Hobi" value="{{ @old('hobi') }}">
                                        @error('hobi')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="cita_cita">Cita-Cita</label>
                                        <input type="text" name="cita_cita"
                                            class="form-control @error('cita_cita') 'is-invalid' @enderror"
                                            id="cita_cita" placeholder="Cita-Cita" value="{{ @old('cita_cita') }}">
                                        @error('cita_cita')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="js-example-basic-single " style="width: 100%" name="kecamatan"
                                            id="kecamatan" required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataKecamatan as $kecamatan)
                                                <option value="{{ $kecamatan->name }}">{{ $kecamatan->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="RT" class="form-label">RT</label>
                                        <input type="text" name="RT"
                                            class="form-control @error('RT') 'is-invalid' @enderror" id="RT"
                                            placeholder="RT" value="{{ @old('RT') }}">
                                        @error('RT')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="RW" class="form-label">RW</label>
                                        <input type="text" name="RW"
                                            class="form-control @error('RW') 'is-invalid' @enderror" id="RW"
                                            placeholder="RW" value="{{ @old('RW') }}">
                                        @error('RW')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="kode_pos" class="form-label">Kode Pos</label>
                                        <input type="text" name="kode_pos" class="form-control" id="kode_pos"
                                            placeholder="Kode Pos" value="{{ @old('kode_pos') }}">
                                        <div class="text-primary">
                                            <p>Untuk mencari kode pos bisa bisa klik tautan <a
                                                    href="https://nomorkodepos.com/">ini</a></p>
                                        </div>
                                        @error('kode_pos')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat"
                                            class="form-label @error('alamat') 'is-invalid' @enderror">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat"
                                            placeholder="Alamat Lengkap" value="{{ @old('alamat') }}">
                                        @error('alamat')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') 'is-invalid' @enderror"
                                            id="email" placeholder="email" value="{{ @old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h4 class="card-title">Berkas Pendukung </h4>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Pas Foto</label>
                                            <input class="form-control" name="pas_foto" type="file"
                                                id="formFile">
                                            @error('pas_foto')
                                                <div class="invalid-feedback d-block">
                               22222                     {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">File Kartu Keluarga (KK)</label>
                                            <input class="form-control" name="file_kk" type="file"
                                                id="formFile">
                                            @error('file_kk')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">File Akta Lahir</label>
                                            <input class="form-control" name="file_akta" type="file"
                                                id="formFile">
                                            @error('file_akta')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">File SKHU (Surat Keterangan
                                                Lulus)</label>
                                            <input class="form-control" name="file_skhu" type="file"
                                                id="formFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- <h4 class="card-title">Data Orang Tua</h4> --}}

                                <div class="forms-sample">

                                    <input type="text" id="test">
                                    <h5 class="card-title">Penghasilan Orang Tua</h5>
                                    <div class="form-group color-black">
                                        <label for="penghasilan_orang_tua">Penghasilan Orang Tua</label>
                                        <select class="form-control" name="penghasilan_orang_tua"
                                            id="penghasilan_orang_tua" required>
                                            <option value="">--Pilih--</option>
                                            @if (old('penghasilan_orang_tua'))
                                                @foreach ($dataPenghasilan as $penghasilan)
                                                    @if (old('penghasilan_orang_tua') == $penghasilan)
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

                                    <h4 class="card-title">Data Ayah</h4>

                                    {{-- Nama Ayah Kandung --}}
                                    <div class="form-group">
                                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                        <input type="text"
                                            class="form-control @error('nama_ayah') 'is-invalid' @enderror"
                                            name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required>
                                        @error('nama_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No KK Ayah --}}
                                    <div class="form-group">
                                        <label for="no_kk_ayah" class="form-label">No KK Ayah</label>
                                        <input type="text"
                                            class="form-control @error('no_kk_ayah') 'is-invalid' @enderror"
                                            name="no_kk_ayah" id="no_kk_ayah" placeholder="No KK Ayah" minlength="16"
                                            required>
                                        @error('no_kk_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Nik Ayah --}}
                                    <div class="form-group">
                                        <label for="nik_ayah" class="form-label">NIK Ayah</label>
                                        <input type="text"
                                            class="form-control @error('nik_ayah') 'is-invalid' @enderror"
                                            name="nik_ayah" id="nik_ayah" placeholder="NIK Ayah" minlength="16"
                                            required>
                                        @error('nik_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Tempat Lahir Ayah --}}
                                    <div class="form-group">
                                        <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir Ayah</label>
                                        <input type="text"
                                            class="form-control @error('tempat_lahir_ayah') 'is-invalid' @enderror"
                                            name="tempat_lahir_ayah" id="tempat_lahir_ayah"
                                            placeholder="Tempat Lahir Ayah" required>
                                        @error('tempat_lahir_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Tanggal Lahir Ayah --}}
                                    <div class="form-group">
                                        <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir Ayah</label>
                                        <input type="date"
                                            class="form-control @error('tanggal_lahir_ayah') 'is-invalid' @enderror"
                                            name="tanggal_lahir_ayah" id="tanggal_lahir_ayah"
                                            placeholder="Tanggal Lahir Ayah" required>
                                        @error('tanggal_lahir_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Pendidikan  Ayah --}}
                                    <div class="form-group">
                                        <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                        <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah"
                                            required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPendidikan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pendidikan_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Pekerjaan Ayah --}}
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah"
                                            required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPekerjaan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pekerjaan_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="kecamatan_ayah">Kecamatan</label>
                                        <select class="js-example-basic-single" style="width: 100%"
                                            name="kecamatan_ayah" id="kecamatan_ayah" required>
                                            <option value="">--Pilih--</option>
                                            <option value="">--Pilih2--</option>
                                            {{-- @foreach ($dataKecamatan as $kecamatan)
                                                @if (@old('kecamatan_ayah'))
                                                    <option value="{{ @old('kecamatan_ayah') }}" selected>
                                                        {{ @old('kecamatan_ayah') }}
                                                    </option>
                                                @endif
                                                <option value="{{ $kecamatan->name }}">{{ $kecamatan->name }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                        @error('kecamatan_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status_ayah">Status Ayah</label>
                                        <select class="form-control" name="status_ayah" id="status_ayah" required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataStatus as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Alamat Ayah --}}
                                    <div class="form-group">
                                        <label for="alamat_ayah" class="form-label">Alamat Ayah</label>
                                        <input type="text"
                                            class="form-control @error('alamat_ayah') 'is-invalid' @enderror"
                                            name="alamat_ayah" id="alamat_ayah" placeholder="Alamat Ayah" required>
                                        @error('alamat_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No HP Ayah --}}
                                    <div class="form-group">
                                        <label for="no_hp_ayah" class="form-label">No HP Ayah</label>
                                        <input type="text"
                                            class="form-control @error('no_hp_ayah') 'is-invalid' @enderror"
                                            name="no_hp_ayah" id="no_hp_ayah" placeholder="No HP Ayah" required>
                                        @error('no_hp_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No WA Ayah --}}
                                    <div class="form-group">
                                        <label for="no_wa_ayah" class="form-label">No WA Ayah</label>
                                        <input type="text"
                                            class="form-control @error('no_wa_ayah') 'is-invalid' @enderror"
                                            name="no_wa_ayah" id="no_wa_ayah" placeholder="No WA Ayah" required>
                                        @error('no_wa_ayah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h4 class="card-title">Data Ibu</h4>

                                    {{-- Nama Ibu --}}
                                    <div class="form-group">
                                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                        <input type="text"
                                            class="form-control @error('nama_ibu') 'is-invalid' @enderror"
                                            name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required>
                                        @error('nama_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No KK Ibu --}}
                                    <div class="form-group">
                                        <label for="no_kk_ibu" class="form-label">No KK Ibu</label>
                                        <input type="text"
                                            class="form-control @error('no_kk_ibu') 'is-invalid' @enderror"
                                            name="no_kk_ibu" id="no_kk_ibu" placeholder="No KK Ayah" minlength="16"
                                            required>
                                        @error('no_kk_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Nik Ibu --}}
                                    <div class="form-group">
                                        <label for="nik_ibu" class="form-label">NIK Ibu</label>
                                        <input type="text"
                                            class="form-control @error('nik_ibu') 'is-invalid' @enderror"
                                            name="nik_ibu" id="nik_ibu" placeholder="NIK Ibu" minlength="16"
                                            required>
                                        @error('nik_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Tempat Lahir Ibu --}}
                                    <div class="form-group">
                                        <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir Ibu</label>
                                        <input type="text"
                                            class="form-control @error('tempat_lahir_ibu') 'is-invalid' @enderror"
                                            name="tempat_lahir_ibu" id="tempat_lahir_ibu"
                                            placeholder="Tempat Lahir Ibu" required>
                                        @error('tempat_lahir_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Tanggal Lahir Ibu --}}
                                    <div class="form-group">
                                        <label for="tanggal_lahir_ibut" class="form-label">Tanggal Lahir Ibu</label>
                                        <input type="date"
                                            class="form-control @error('tanggal_lahir_ibut') 'is-invalid' @enderror"
                                            name="tanggal_lahir_ibu" id="tanggal_lahir_ibu"
                                            placeholder="Tanggal Lahir Ibu" required>
                                        @error('tanggal_lahir_ibut')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Pendidikan  Ibu --}}
                                    <div class="form-group">
                                        <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                        <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu"
                                            required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPendidikan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pendidikan_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Pekerjaan Ibu --}}
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu"
                                            required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPekerjaan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pekerjaan_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    {{-- alamat Ibu --}}

                                    <div class="form-group">
                                        <label for="kecamatan_ibu">Kecamatan</label>
                                        <select class="js-example-basic-single" style="width: 100%"
                                            name="kecamatan_ibu" id="kecamatan_ibu" required>
                                            <option value="">--Pilih--</option>
                                        </select>
                                        @error('kecamatan_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status_ibu">Status Ibu</label>
                                        <select class="form-control" name="status_ibu" id="status_ibu" required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataStatus as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Alamat Ibu --}}
                                    <div class="form-group">
                                        <label for="alamat_ibu" class="form-label">Alamat Ibu</label>
                                        <input type="text"
                                            class="form-control @error('alamat_ibu') 'is-invalid' @enderror"
                                            name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Ibu" required>
                                        @error('alamat_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No HP Ayah --}}
                                    <div class="form-group">
                                        <label for="no_hp_ibu" class="form-label">No HP Ibu</label>
                                        <input type="text"
                                            class="form-control @error('no_hp_ibu') 'is-invalid' @enderror"
                                            name="no_hp_ibu" id="no_hp_ibu" placeholder="No HP Ibu" required>
                                        @error('no_hp_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No WA Ayah --}}
                                    <div class="form-group">
                                        <label for="no__wa_ibu" class="form-label">No WA Ibu</label>
                                        <input type="text"
                                            class="form-control @error('no__wa_ibu') 'is-invalid' @enderror"
                                            name="no__wa_ibu" id="no_wa_ibu" placeholder="No WA Ibu" required>
                                        @error('no__wa_ibu')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- <h4 class="card-title">Asal Sekolah Calon Santri</h4> --}}

                                    {{-- <div class="form-group">
                                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                        <input type="text"
                                            class="form-control @error('asal_sekolah') 'is-invalid' @enderror"
                                            name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah"
                                            required>
                                        @error('asal_sekolah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <label for="NISN" class="form-label">NISN</label>
                                        <input type="text"
                                            class="form-control @error('NISN') 'is-invalid' @enderror" name="NISN"
                                            id="NISN" placeholder="NISN" required>
                                        @error('NISN')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- Jenjang Sekolah --}}
                                    {{-- <div class="form-group">
                                        <label for="jenjang" class="form-label">Jenjang</label>
                                        <select class="form-control" name="jenjang" id="jenjang" required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataJenjang as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('jenjang')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- Jenjang Sekolah --}}
                                    {{-- <div class="form-group">
                                        <label for="status_sekolah" class="form-label">Status Sekolah</label>
                                        <select class="form-control" name="status_sekolah" id="status_sekolah"
                                            required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataStatusSekolah as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_sekolah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <label for="kecamatan_sekolah">Kecamatan Sekolah</label>
                                        <select class="js-example-basic-single" style="width: 100%"
                                            name="kecamatan_sekolah" id="kecamatan_sekolah" required>
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataKecamatan as $kecamatan)
                                                <option value="{{ $kecamatan->name }}">{{ $kecamatan->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan_sekolah')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <label for="no_peserta_ujian" class="form-label">no_peserta_ujian</label>
                                        <input type="text"
                                            class="form-control @error('no_peserta_ujian') 'is-invalid' @enderror"
                                            name="no_peserta_ujian" id="no_peserta_ujian"
                                            placeholder="no_peserta_ujian">
                                        @error('no_peserta_ujian')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <h4 class="card-title">Data Wali <span class="text-danger">(Kosongkan jika tidak
                                            ada wali)</span>
                                    </h4>

                                    <div class="form-group">
                                        <label for="nama_wali_santri" class="form-label">Nama Wali Santri</label>
                                        <input type="text" class="form-control" name="nama_wali_santri"
                                            id="nama_wali_santri" placeholder="Nama Wali Santri">
                                    </div>

                                    <div class="form-group">
                                        <label for="no_kk_wali" class="form-label">No KK Wali</label>
                                        <input type="text" class="form-control" name="no_kk_wali" id="no_kk_wali"
                                            placeholder="No KK Wali">
                                    </div>

                                    <div class="form-group">
                                        <label for="nik_wali" class="form-label">NIK Wali</label>
                                        <input type="text" class="form-control" name="nik_wali" id="no_kk_wali"
                                            placeholder="NIK WALI">
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir_wali" class="form-label">Tempat Lahir Wali</label>
                                        <input type="text" class="form-control" name="tempat_lahir_wali"
                                            id="no_kk_wali" placeholder="Tempat Lahir Wali">
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir_wali" class="form-label">Tanggal Lahir Wali</label>
                                        <input type="date" class="form-control" name="tanggal_lahir_wali"
                                            id="tanggal_lahir_wali" placeholder="Tanggal Lahir Wali">
                                    </div>

                                    {{-- Pendidikan  Wali --}}
                                    <div class="form-group">
                                        <label for="pendidikan_wali">Pendidikan Wali</label>
                                        <select class="form-control" name="pendidikan_wali" id="pendidikan_wali">
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPendidikan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pendidikan_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Pekerjaan Wali --}}
                                    <div class="form-group">
                                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                        <select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                                            <option value="">--Pilih--</option>
                                            @foreach ($dataPekerjaan as $data)
                                                <option value="{{ $data }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                        @error('pekerjaan_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="kecamatan_wali">Kecamatan Wali</label>
                                        <select class="js-example-basic-single" style="width: 100%"
                                            name="kecamatan_wali" id="kecamatan_wali">

                                            <option value="">--Pilih--</option>
                                        </select>
                                        @error('kecamatan_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Alamat Wali --}}
                                    <div class="form-group">
                                        <label for="alamat_wali" class="form-label">Alamat Wali</label>
                                        <input type="text"
                                            class="form-control @error('alamat_wali') 'is-invalid' @enderror"
                                            name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali">
                                        @error('alamat_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No HP Ayah --}}
                                    <div class="form-group">
                                        <label for="no_hp_wali" class="form-label">No HP Wali</label>
                                        <input type="text"
                                            class="form-control @error('no_hp_wali') 'is-invalid' @enderror"
                                            name="no_hp_wali" id="no_hp_wali" placeholder="No Wa Wali">
                                        @error('no_hp_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- No WA Wali --}}
                                    <div class="form-group">
                                        <label for="no_wa_wali" class="form-label">No WA Wali</label>
                                        <input type="text"
                                            class="form-control @error('no_wa_wali') 'is-invalid' @enderror"
                                            name="no_wa_wali" id="no_wa_wali" placeholder="No Wa Wali">
                                        @error('no_wa_wali')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
            </div>
        </div>
        </form>

        {{-- </div> --}}
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                Premium
                <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                with
                <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
    {{--
            </div> --}}
    {{--
        </div> --}}

    </div>

    <script src="{{ asset('adminpage/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('adminpage/js/template.js') }}"></script>
    <script src="{{ asset('userpage/js/listCountries.js') }}"></script>
    <script src="{{ asset('adminpage/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('adminpage/js/select2.js') }}"></script>
    <script></script>

</body>

</html>

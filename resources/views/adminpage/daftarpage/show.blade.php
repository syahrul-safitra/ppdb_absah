@extends('adminpage.layouts.main')

@section('container')
    {{-- <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Data Diri Santri</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No KK</th>
                                    <th>JK</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Anak Ke</th>
                                    <th>Dari Saudara</th>
                                    <th>Tinggi Badan</th>
                                    <th>Berat Badan</th>
                                    <th>Hobi</th>
                                    <th>Cita-Cita</th>
                                    <th>Kecamatan</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kode Pos</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Pas Foto</th>
                                    <th>File KK</th>
                                    <th>File Akta</th>
                                    <th>File SKHU</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->NIK }}</td>
                                    <td>{{ $data->No_KK }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->tempat_lahir }}</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->anak_ke }}</td>
                                    <td>{{ $data->dari_saudara }}</td>
                                    <td>{{ $data->tinggi_badan }}</td>
                                    <td>{{ $data->berat_badan }}</td>
                                    <td>{{ $data->hobi }}</td>
                                    <td>{{ $data->cita_cita }}</td>
                                    <td>{{ $data->kecamatan }}</td>
                                    <td>{{ $data->RT }}</td>
                                    <td>{{ $data->RW }}</td>
                                    <td>{{ $data->kode_pos }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td><a href="{{ url('storage/' . $data->pas_foto) }}">a</a></td>
                                    <td><a href="{{ url('storage/' . $data->file_kk) }}">a</a></td>
                                    <td><a href="{{ url('storage/' . $data->file_akta) }}">a</a></td>
                                    <td><a href="{{ url('storage/' . $data->file_skhu) }}">a</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Data Ayah</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Nama Ibu</th>
                                            <th>No KK </th>
                                            <th>NIK </th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>No HP</th>
                                            <th>No WA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->dataOrangTua->nama_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->no_kk_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->nik_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->tempat_lahir_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->tanggal_lahir_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->pendidikan_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->kecamatan_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->alamat_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->status_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->no_hp_ibu }}</td>
                                            <td>{{ $data->dataOrangTua->no_wa_ibu }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Data Wali</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Nama Wali</th>
                                            <th>No KK </th>
                                            <th>NIK </th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>No HP</th>
                                            <th>No WA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->dataOrangTua->nama_wali }}</td>
                                            <td>{{ $data->dataOrangTua->no_kk_wali }}</td>
                                            <td>{{ $data->dataOrangTua->nik_wali }}</td>
                                            <td>{{ $data->dataOrangTua->tempat_lahir_wali }}</td>
                                            <td>{{ $data->dataOrangTua->tanggal_lahir_wali }}</td>
                                            <td>{{ $data->dataOrangTua->pendidikan_wali }}</td>
                                            <td>{{ $data->dataOrangTua->kecamatan_wali }}</td>
                                            <td>{{ $data->dataOrangTua->alamat_wali }}</td>
                                            <td>{{ $data->dataOrangTua->status_wali }}</td>
                                            <td>{{ $data->dataOrangTua->no_hp_wali }}</td>
                                            <td>{{ $data->dataOrangTua->no_wa_wali }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Data ibu</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Penghasilan Orang Tua</th>
                                            <th>Nama Ayah</th>
                                            <th>No KK </th>
                                            <th>NIK </th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>No HP</th>
                                            <th>No WA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->dataOrangTua->penghasilan_org_tua }}</td>
                                            <td>{{ $data->dataOrangTua->nama_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->no_kk_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->nik_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->tempat_lahir_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->tanggal_lahir_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->pendidikan_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->kecamatan_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->alamat_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->status_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->no_hp_ayah }}</td>
                                            <td>{{ $data->dataOrangTua->no_wa_ayah }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Pendidikan Sebelumnya</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Asal Sekolah</th>
                                            <th>NPSN</th>
                                            <th>Jenjang</th>
                                            <th>Status Sekolah</th>
                                            <th>Kecamatan Sekolah</th>
                                            <th>Alamat Sekolah</th>
                                            <th>No Peserta Ujian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->pendidikanSebelumnya->asal_sekolah }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->NPSN }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->jenjang }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->status_sekolah }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->kecamatan_sekolah }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->alamat_sekolah }}</td>
                                            <td>{{ $data->pendidikanSebelumnya->no_peserta_ujian }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Data Santri</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->NIK }}</td>
                                </tr>
                                <tr>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->No_KK }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>Anak Ke</td>
                                    <td>:</td>
                                    <td>{{ $data->anak_ke }}</td>
                                </tr>
                                <tr>
                                    <td>Dari Saudara</td>
                                    <td>:</td>
                                    <td>{{ $data->dari_saudara }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td>:</td>
                                    <td>{{ $data->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                    <td>:</td>
                                    <td>{{ $data->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>:</td>
                                    <td>{{ $data->hobi }}</td>
                                </tr>
                                <tr>
                                    <td>Cita Cita</td>
                                    <td>:</td>
                                    <td>{{ $data->cita_cita }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $data->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td>RT</td>
                                    <td>:</td>
                                    <td>{{ $data->RT }}</td>
                                </tr>
                                <tr>
                                    <td>RW</td>
                                    <td>:</td>
                                    <td>{{ $data->RW }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td>{{ $data->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Data Ayah</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Penghasilan Orang Tua</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->penghasilan_org_tua }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_kk_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nik_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tempat_lahir_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tanggal_lahir_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pendidikan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pekerjaan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->kecamatan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Ayah</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->alamat_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->status_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>No WA</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>RT</td>
                                    <td>:</td>
                                    <td>{{ $data->RT }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Data Ibu</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_kk_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nik_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tempat_lahir_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tanggal_lahir_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pendidikan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->kecamatan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->alamat_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->status_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>No WA</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_ibu }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Data Wali</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nama_wali_santri }}</td>
                                </tr>
                                <tr>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_kk_wali }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->nik_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tempat_lahir_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->tanggal_lahir_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pendidikan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->pekerjaan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->kecamatan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->alamat_wali }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_wali }}</td>
                                </tr>
                                <tr>
                                    <td>No WA</td>
                                    <td>:</td>
                                    <td>{{ $data->DataOrangTua->no_hp_wali }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Pendidikan Sebelumnya</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Asal Sekolah</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>NPSN</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->NPSN }}</td>
                                </tr>
                                <tr>
                                    <td>Jenjang</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->jenjang }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->status_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->kecamatan_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->alamat_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>No Peserta Ujian</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikanSebelumnya->no_peserta_ujian }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-2">Berkas</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <tr>
                                    <td>Pas Foto</td>
                                    <td>:</td>
                                    <td><img src="{{ asset('storage/' . $data->pas_foto) }}" alt=""
                                            style="width: 200px; height:200px;border-radius:0"></td>
                                </tr>
                                <tr>
                                    <td>File KK</td>
                                    <td>:</td>
                                    <td><a class="btn btn-primary"
                                            style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"
                                            href="{{ asset('storage/' . $data->file_kk) }}"><i class="ti-file"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Akta</td>
                                    <td>:</td>
                                    <td><a class="btn btn-primary"
                                            style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"
                                            href="{{ asset('storage/' . $data->file_akta) }}"><i class="ti-file"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File SKHU</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->file_skhu)
                                            <a class="btn btn-primary"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"
                                                href="{{ asset('storage/' . $data->file_skhu) }}"><i
                                                    class="ti-file"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

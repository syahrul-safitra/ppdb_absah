<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\DataOrangTua;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\PendidikanSebelumnya;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dataPendaftaran = Daftar::where('status_diterima', 'belum')->get();

        return view('adminpage.daftarpage.index', [
            'dataPendaftaran' => $dataPendaftaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKecamatan = District::all();

        $dataPenghasilan = ['Tidak Berpenghasilan', '500.000 - 999.000', '1.000.000 - 1.999.999', '2.000.000 - 4.599.999', '5.000.000 - 9.999.999', '10.000.000 juta/lebih', 'lainnya'];
        $dataPendidikan = ['Tidak Sekolah', 'PAUD', 'SD/sederajat', 'SMP/sederajat', 'SMA/sederajat', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3', 'Non Formal'];
        $dataPekerjaan = ['Tidak Bekerja', 'Petani', 'Buruh', 'Wiraswasta', 'Wirausaha', 'PNS/TNI/Polri', 'Karyawan Swasta', 'Pedagang'];
        $dataStatus = ['Mashi Hidup', 'Wafat'];
        $dataJenjang = ['SD', 'MI', 'SMP', 'MTs', 'SMA', 'MA'];
        $dataStatusSekolah = ['Negeri', 'Swasta'];

        return view('userpage.daftar2', [
            'dataPenghasilan' => $dataPenghasilan,
            'dataPendidikan' => $dataPendidikan,
            'dataPekerjaan' => $dataPekerjaan,
            'dataStatus' => $dataStatus,
            'dataJenjang' => $dataJenjang,
            'dataStatusSekolah' => $dataStatusSekolah,
            'dataKecamatan' => $dataKecamatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validated : 
        $validatedDaftars = $request->validate([
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'NIK' => 'required|max:16|unique:daftars',
            'No_KK' => 'required|max:16',
            'anak_ke' => 'required',
            'dari_saudara' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'hobi' => 'required|max:255',
            'cita_cita' => 'required|max:255',
            'kecamatan' => 'required',
            'RT' => 'required|max:255',
            'RW' => 'required|max:255',
            'kode_pos' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|max:255',
            'pas_foto' => 'required|max:5000',
            'file_kk' => 'required|max:5000',
            'file_akta' => 'required|max:5000',
            'file_skhu' => 'max:5000'
        ]);

        $validatedDataOrangTua = $request->validate([
            'penghasilan_org_tua' => 'required',
            'nama_ayah' => 'required|max:255',
            'no_kk_ayah' => 'required|max:16',
            'nik_ayah' => 'required|max:16',
            'tempat_lahir_ayah' => 'required|max:255',
            'tanggal_lahir_ayah' => 'required|max:255',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'kecamatan_ayah' => 'required',
            'status_ayah' => 'required',
            'alamat_ayah' => 'required',
            'no_hp_ayah' => 'required',
            'no_wa_ayah' => 'required',

            'nama_ibu' => 'required|max:255',
            'no_kk_ibu' => 'required|max:16',
            'nik_ibu' => 'required|max:16',
            'tempat_lahir_ibu' => 'required|max:255',
            'tanggal_lahir_ibu' => 'required|max:255',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'status_ibu' => 'required',
            'alamat_ibu' => 'required|max:100',
            'no_hp_ibu' => 'required',
            'no_wa_ibu' => 'required',

            'nama_wali_santri' => 'max:255',
            'no_kk_wali' => 'max:16',
            'nik_wali' => 'max:16',
            'tempat_lahir_wali' => 'max:255',
            'tanggal_lahir_wali' => 'max:255',
            'pendidikan_wali' => '',
            'pekerjaan_wali' => '',
            'kecamatan_wali' => '',
            'status_wali' => '',
            'alamat_wali' => 'max:100',
            'no_hp_wali' => 'max:20',
            'no_wa_wali' => 'max:20',
        ]);

        $validatedPendidikanSebelumnya = $request->validate([
            'asal_sekolah' => 'required|max:200',
            'NPSN' => 'required|max:20',
            'jenjang' => 'required',
            'status_sekolah' => 'required',
            'kecamatan_sekolah' => 'required',
            'alamat_sekolah' => 'required|max:200',
            'no_peserta_ujian' => 'max:20'
        ]);

        // inisialisasi data nik pada data orang tua & pendidikan sebelumnya :
        $validatedDataOrangTua['daftar_nik'] = $request->NIK;
        $validatedPendidikanSebelumnya['daftar_nik'] = $request->NIK;

        // ubah file pas foto : 
        $validatedDaftars['pas_foto'] = $request->file('pas_foto')->store('berkas');
        $validatedDaftars['file_kk'] = $request->file('file_kk')->store('berkas');
        $validatedDaftars['file_akta'] = $request->file('file_akta')->store('berkas');

        if ($request->file('file_skhu')) {
            $validatedDaftars['file_skhu'] = $request->file('file_skhu')->store('berkas');
        }

        Daftar::create($validatedDaftars);
        DataOrangTua::create($validatedDataOrangTua);
        PendidikanSebelumnya::create($validatedPendidikanSebelumnya);

        return view('userpage.notifBerhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar $daftar)
    {

        return view('adminpage.daftarpage.show', [
            'data' => $daftar->load(['dataOrangTua', 'pendidikanSebelumnya'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {

        $dataKecamatan = District::all();

        $dataPenghasilan = ['Tidak Berpenghasilan', '500.000 - 999.000', '1.000.000 - 1.999.999', '2.000.000 - 4.599.999', '5.000.000 - 9.999.999', '10.000.000 juta/lebih', 'lainnya'];
        $dataPendidikan = ['Tidak Sekolah', 'PAUD', 'SD/sederajat', 'SMP/sederajat', 'SMA/sederajat', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3', 'Non Formal'];
        $dataPekerjaan = ['Tidak Bekerja', 'Petani', 'Buruh', 'Wiraswasta', 'Wirausaha', 'PNS/TNI/Polri', 'Karyawan Swasta', 'Pedagang'];
        $dataStatus = ['Mashi Hidup', 'Wafat'];
        $dataJenjang = ['SD', 'MI', 'SMP', 'MTs', 'SMA', 'MA'];
        $dataStatusSekolah = ['Negeri', 'Swasta'];

        return view('adminpage.daftarpage.edit', [
            'data' => $daftar->load(['dataOrangTua', 'pendidikanSebelumnya']),
            'dataPenghasilan' => $dataPenghasilan,
            'dataPendidikan' => $dataPendidikan,
            'dataPekerjaan' => $dataPekerjaan,
            'dataStatus' => $dataStatus,
            'dataJenjang' => $dataJenjang,
            'dataStatusSekolah' => $dataStatusSekolah,
            'dataKecamatan' => $dataKecamatan,
            'datax' => $daftar->dataOrangTua

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftar $daftar)
    {

        // bool nik dirubah : 
        $nikUpdate = false;
        // validated : 
        $rulesDaftar = [
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'NIK' => 'required|max:16',
            'No_KK' => 'required|max:16',
            'anak_ke' => 'required',
            'dari_saudara' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'hobi' => 'required|max:255',
            'cita_cita' => 'required|max:255',
            'kecamatan' => 'required',
            'RT' => 'required|max:255',
            'RW' => 'required|max:255',
            'kode_pos' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|max:255',
            'pas_foto' => 'max:5000',
            'file_kk' => 'max:5000',
            'file_akta' => 'max:5000',
            'file_skhu' => 'max:5000'
        ];


        // cek NIK dirubah :
        if ($daftar->NIK != $request->NIK) {
            $rulesDaftar['NIK'] = 'required|max:16|unique:daftars';

            $nikUpdate = true;
        }

        $validatedDaftars = $request->validate($rulesDaftar);

        $validatedDataOrangTua = $request->validate([
            'penghasilan_org_tua' => 'required',
            'nama_ayah' => 'required|max:255',
            'no_kk_ayah' => 'required|max:16',
            'nik_ayah' => 'required|max:16',
            'tempat_lahir_ayah' => 'required|max:255',
            'tanggal_lahir_ayah' => 'required|max:255',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'kecamatan_ayah' => 'required',
            'status_ayah' => 'required',
            'alamat_ayah' => 'required',
            'no_hp_ayah' => 'required',
            'no_wa_ayah' => 'required',

            'nama_ibu' => 'required|max:255',
            'no_kk_ibu' => 'required|max:16',
            'nik_ibu' => 'required|max:16',
            'tempat_lahir_ibu' => 'required|max:255',
            'tanggal_lahir_ibu' => 'required|max:255',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'status_ibu' => 'required',
            'alamat_ibu' => 'required|max:100',
            'no_hp_ibu' => 'required',
            'no_wa_ibu' => 'required',

            'nama_wali_santri' => 'max:255',
            'no_kk_wali' => 'max:16',
            'nik_wali' => 'max:16',
            'tempat_lahir_wali' => 'max:255',
            'tanggal_lahir_wali' => 'max:255',
            'pendidikan_wali' => '',
            'pekerjaan_wali' => '',
            'kecamatan_wali' => '',
            'status_wali' => '',
            'alamat_wali' => 'max:100',
            'no_hp_wali' => 'max:20',
            'no_wa_wali' => 'max:20',
        ]);

        $validatedPendidikanSebelumnya = $request->validate([
            'asal_sekolah' => 'required|max:200',
            'NPSN' => 'required|max:20',
            'jenjang' => 'required',
            'status_sekolah' => 'required',
            'kecamatan_sekolah' => 'required',
            'alamat_sekolah' => 'required|max:200',
            'no_peserta_ujian' => 'max:20'
        ]);

        // cek apakah file dirubah : 
        if ($request->file('pas_foto')) {
            // input foto baru : 
            $validatedDaftars['pas_foto'] = $request->file('pas_foto')->store('berkas');
            // hapus file lama : 
            Storage::delete($daftar->pas_foto);
        }

        // cek apakah file dirubah : 
        if ($request->file('file_kk')) {
            // input foto baru : 
            $validatedDaftars['file_kk'] = $request->file('file_kk')->store('berkas');
            // hapus file lama : 
            Storage::delete($daftar->pas_foto);
        }

        // cek apakah file dirubah : 
        if ($request->file('file_akta')) {
            // input foto baru : 
            $validatedDaftars['file_akta'] = $request->file('file_akta')->store('berkas');
            // hapus file lama : 
            Storage::delete($daftar->file_akta);
        }

        if ($request->file('file_skhu')) {
            // input file baru 
            $validatedDaftars['file_skhu'] = $request->file('file_skhu')->store('berkas');
            // hapus file lama : 
            Storage::delete($daftar->file_skhu);
        }

        Daftar::where('NIK', $daftar->NIK)->update($validatedDaftars);
        DataOrangTua::where('daftar_nik', $validatedDaftars['NIK'])->update($validatedDataOrangTua);
        PendidikanSebelumnya::where('daftar_nik', $validatedDaftars['NIK'])->update($validatedPendidikanSebelumnya);

        return redirect('daftar')->with('success', 'Data Pendaftaran Berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar $daftar)
    {
        Daftar::where('id', $daftar->id)->delete();
        return redirect('daftar')->with('success', 'Data Pendaftaran Berhasil dihapus!');
    }

    public function delete(Daftar $daftar)
    {
        return $daftar;
    }

    public function dataKabupatenAjax(Request $request)
    {

        $dataDistricts = District::select('name')->where('name', 'like', '%' . $request->search . '%')->get();

        $dataKabupaten = array();
        foreach ($dataDistricts as $data) {
            $simpan['id'] = $data['name'];
            $simpan['text'] = $data['name'];

            array_push($dataKabupaten, $simpan);
        }

        // return $dataKabupaten;
        echo json_encode($dataKabupaten);
    }

    public function bayar(Request $request)
    {
        Daftar::where('id', $request->id)->update(['pembayaran' => 'lunas']);

        return redirect('daftar')->with('success', 'Berhasil melakukan pembayaran');
    }

    public function terima(Request $request)
    {
        $getData = Daftar::where('id', $request->id)->first();

        if ($getData->pembayaran == 'belum') {
            return redirect('daftar')->with('error', 'Santri belum melakukan pembayaran!');
        } else {
            Daftar::where('id', $request->id)->update(['status_diterima' => 'diterima']);
            return redirect('daftar')->with('success', 'Santri berhasil diterima!');
        }
    }

    public function diterima()
    {

        return view('adminpage.daftarpage.diterima', [
            'dataPendaftaran' => Daftar::where('status_diterima', 'diterima')->get()
            // 'dataPendaftaran' => Daftar::all()
        ]);
    }

    public function cek()
    {
        return view('userpage.cekPendaftaran');
    }

    public function cekHasil(Request $request)
    {
        $getData = Daftar::where('NIK', $request->NIK)->first();

        if ($getData) {

            if ($getData->pembayaran == 'lunas') {

                $message = 'Data atas nama ' . $getData->nama . ' telah terkirim ke sistem, sudah melakukan pembayaran dan telah diterima di ponpes al-baqiyatush shalihat.';
                return back()->with('success', $message);
            } else {
                $message = 'Data atas nama ' . $getData->nama . ' telah terkirim ke sistem, silahkan melakukan pembayaran dan melengkapi berkas.';
                return back()->with('info', $message);
            }
        }
        return back()->with('error', 'Data tidak ditemukan!');
    }
}

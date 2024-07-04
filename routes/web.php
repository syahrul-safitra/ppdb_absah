<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Models\Daftar;
use App\Models\Informasi;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('userpage.index', [
        'dataBerita' => Informasi::all()
    ]);
});

Route::get('informasi', function () {
    return view('adminpage.informasipage.index');
})->middleware('auth');

Route::get('dashboard', function () {

    $totalSantriMendaftar = Daftar::all()->count();
    $totalSantriYangDiterima = Daftar::where('status_diterima', 'diterima')->get()->count();
    $totalSantriYangBelumDiterima = Daftar::where('status_diterima', 'belum')->get()->count();
    $totalBerita = Informasi::all()->count();

    return view('adminpage.index', [
        'totalSantriYgMendaftar' => $totalSantriMendaftar,
        'totalSantriYgDiterima' => $totalSantriYangDiterima,
        'totalSantriYgBlmDiterima' => $totalSantriYangBelumDiterima,
        'totalBerita' => $totalBerita
    ]);
})->middleware('auth');

Route::get('cek', [DaftarController::class, 'cek']);
Route::post('cek', [DaftarController::class, 'cekHasil']);

Route::get('login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'authentication']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('test', function () {
    return view('userpage.notifBerhasil');
});

Route::get('pendaftaran', [DaftarController::class, 'create']);
Route::post('pendaftaran', [DaftarController::class, 'store']);
Route::get('pendaftaran/delete/{daftar}', [DaftarController::class, 'delete']);
Route::post('bayar', [DaftarController::class, 'bayar']);
Route::post('terima', [DaftarController::class, 'terima']);
Route::get('diterima', [DaftarController::class, 'diterima']);

Route::resource('informasi', InformasiController::class)->middleware('auth');
Route::resource('daftar', DaftarController::class)->middleware('auth');
Route::get('informasis/{informasi}', [InformasiController::class, 'lihat']);
// data input select ajax : 
Route::get('daftarnamakabupaten', [DaftarController::class, 'dataKabupatenAjax']);

// Profil : 
Route::get('sejarah', function () {
    return view('userpage.profil');
});

<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DokterController;
use \App\Http\Controllers\KaryawanController;
use \App\Http\Controllers\ObatController;
use \App\Http\Controllers\PasienController;
use \App\Http\Controllers\PeriksaController;
use \App\Http\Controllers\PenyakitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/dokter', function () {
    return view('dokter');
});*/

Route::get('/dokter',[DokterController::class,'index'])
    ->name('dokter.index');

Route::get('/dokter/hapus/{id}',[DokterController::class,'hapus'])
    ->name('dokter.hapus');

Route::post('/dokter/simpan',[DokterController::class,'simpan'])
    ->name('dokter.simpan');

Route::get('/dokter/tampil/{id}',[DokterController::class,'tampil'])
    ->name('dokter.tampil');

Route::post('/dokter/rubah/{id}',[DokterController::class,'update'])
    ->name('dokter.update');


Route::get('/karyawan',[KaryawanController::class,'index'])
    ->name('karyawan.index');

Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus'])
    ->name('karyawan.hapus');

Route::post('/karyawan/simpan',[KaryawanController::class,'simpan'])
    ->name('karyawan.simpan');

Route::get('/karyawan/tampil/{id}',[KaryawanController::class,'tampil'])
    ->name('karyawan.tampil');

Route::post('/karyawan/rubah/{id}',[KaryawanController::class,'update'])
    ->name('karyawan.update');



Route::get('/obat',[ObatController::class,'index'])
    ->name('obat.index');

Route::get('/obat/hapus/{id}',[ObatController::class,'hapus'])
    ->name('obat.hapus');

Route::post('/obat/simpan',[ObatController::class,'simpan'])
    ->name('obat.simpan');

Route::get('/obat/tampil/{id}',[ObatController::class,'tampil'])
    ->name('obat.tampil');

Route::post('/obat/rubah/{id}',[ObatController::class,'update'])
    ->name('obat.update');


Route::get('/pasien',[PasienController::class,'index'])
    ->name('pasien.index');

Route::get('/pasien/hapus/{id}',[PasienController::class,'hapus'])
    ->name('pasien.hapus');

Route::post('/pasien/simpan',[PasienController::class,'simpan'])
    ->name('pasien.simpan');

Route::get('/pasien/tampil/{id}',[PasienController::class,'tampil'])
    ->name('pasien.tampil');

Route::post('/pasien/rubah/{id}',[PasienController::class,'update'])
    ->name('pasien.update');

Route::get('/penyakit',[PenyakitController::class,'index'])
    ->name('penyakit.index');

Route::get('/penyakit/hapus/{id}',[PenyakitController::class,'hapus'])
    ->name('penyakit.hapus');

Route::post('/penyakit/simpan',[PenyakitController::class,'simpan'])
    ->name('penyakit.simpan');

Route::get('/penyakit/tampil/{id}',[PenyakitController::class,'tampil'])
    ->name('penyakit.tampil');

Route::post('/penyakit/rubah/{id}',[PenyakitController::class,'update'])
    ->name('penyakit.update');



Route::get('/periksa',[PeriksaController::class,'index'])
    ->name('periksa.index');

Route::get('/periksa/hapus/{id}',[PeriksaController::class,'hapus'])
    ->name('periksa.hapus');

Route::post('/periksa/simpan',[PeriksaController::class,'simpan'])
    ->name('periksa.simpan');

Route::get('/periksa/tampil/{id}',[PeriksaController::class,'tampil'])
    ->name('periksa.tampil');

Route::post('/periksa/rubah/{id}',[PeriksaController::class,'update'])
    ->name('periksa.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

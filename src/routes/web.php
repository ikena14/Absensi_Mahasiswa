<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\AbsensiController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']
);

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/kelas/form',[KelasController::class,'tampilform'])
    ->name("kelas.form");
    Route::get('/kelas/list/{id}',[KelasController::class,'tampillist'])
    ->name("kelas.list");
    Route::get('/pertemuan/form/{kelasid}',[PertemuanController::class,'tampilform'])
    ->name("pertemuan.form");
    Route::get('/peserta/invite/{kode}',[PesertaController::class,'tampil_form_email'])
    ->name("peserta.invite");
    Route::post('/peserta/undang',[PesertaController::class,'undangmahasiswa'])
    ->name("peserta.undang");
    Route::get('/peserta/detail/{id}',[PesertaController::class,'tampil_peserta_detail'])
    ->name("peserta.detail");
    Route::get('/absensi/form/{id}',[AbsensiController::class,'tampil_form_absensi'])
    ->name("absensi.form");
    Route::post('/absensi/tampil',[AbsensiController::class,'tampil_daftar_absensi'])
    ->name("absensi.tampil");
    Route::get('/kelas/hapus/{id}',[KelasController::class,'hapuskelas'])
    ->name("kelas.hapus");
    Route::get('/kelas/{kelasid}/{mahasiswaid}',[KelasController::class,'hapusmahasiswa'])
    ->name("kelas.hapus.mahasiswa");
    Route::get('/kelas/{kode}',[KelasController::class,'joinmahasiswa'])
    ->name("kelas.join.mahasiswa");
    Route::post('/kelas/create',[KelasController::class,'buatkelas'])
    ->name("kelas.create");
    Route::get('/pertemuan/hapus/{id}',[PertemuanController::class,'hapuspertemuan'])
    ->name("pertemuan.hapus");
    Route::post('/pertemuan/create',[PertemuanController::class,'buatpertemuan'])
    ->name("pertemuan.create");
    Route::get('/pertemuan/{kode}',[PertemuanController::class,'absensimahasiswa'])
    ->name("pertemuan.absensi");

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




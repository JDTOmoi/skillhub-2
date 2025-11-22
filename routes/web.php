<?php

use Illuminate\Support\Facades\Route;
use App\Models\Peserta;
use App\Models\Kelas;
use App\Models\Pendaftaran;

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
    return view('welcome');
});

Route::prefix('pendaftaran')->group(function () {
    Route::get('/', [Pendaftaran::class, 'mainMenu'])->name('MenuPendaftaran');
    Route::get('/register', [Pendaftaran::class, 'registerMenu'])->name('RegisterPendaftaran');
    Route::post('/register', [Pendaftaran::class, 'registerPesertaToClasses'])->name('RegisterPendaftaranPost');
    Route::get('/peserta', [Pendaftaran::class, 'displayAllKelasForPeserta'])->name('PesertaPendaftaran');
    Route::get('/kelas', [Pendaftaran::class, 'displayAllPesertaForKelas'])->name('KelasPendaftaran');
    Route::get('/delete', [Pendaftaran::class, 'confirmDeletePendaftaran'])->name('confirmDeletePendaftaran');
    Route::delete('/delete', [Pendaftaran::class, 'deletePendaftaran'])->name('hapusPendaftaran');
});
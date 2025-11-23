<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PendaftaranController;

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

Route::get('/', [PesertaController::class, 'displayAllPeserta'])->name('MenuPeserta');

Route::prefix('pendaftaran')->group(function () {
    Route::get('/', [PendaftaranController::class, 'mainMenu'])->name('MenuPendaftaran');
    Route::get('/register', [PendaftaranController::class, 'registerMenu'])->name('RegisterPendaftaran');
    Route::post('/register', [PendaftaranController::class, 'registerPesertaToClasses'])->name('RegisterPendaftaranPost');
    Route::get('/peserta', [PendaftaranController::class, 'displayAllKelasForPeserta'])->name('PesertaPendaftaran');
    Route::get('/kelas', [PendaftaranController::class, 'displayAllPesertaForKelas'])->name('KelasPendaftaran');
    Route::get('/delete', [PendaftaranController::class, 'confirmDeletePendaftaran'])->name('ConfirmDeletePendaftaran');
    Route::delete('/delete', [PendaftaranController::class, 'deletePendaftaran'])->name('HapusPendaftaran');
});

Route::prefix('peserta')->group(function () {
    Route::get('/', [PesertaController::class, 'displayAllPeserta'])->name('MenuPeserta');
    Route::get('/detail/{peserta}', [PesertaController::class, 'detailPeserta'])->name('DetailPeserta');
    Route::get('/update', [PesertaController::class, 'updatePesertaMenu'])->name('UpdatePeserta');
    Route::put('/update', [PesertaController::class, 'updatePesertaPost'])->name('UpdatePesertaPost');
    Route::get('/add', [PesertaController::class, 'addPesertaMenu'])->name('AddPeserta');
    Route::post('/add', [PesertaController::class, 'addPesertaPost'])->name('AddPesertaPost');
    Route::get('/delete', [PesertaController::class, 'confirmDeletePeserta'])->name('ConfirmDeletePeserta');
    Route::delete('/delete', [PesertaController::class, 'deletePeserta'])->name('HapusPeserta');
});

Route::prefix('kelas')->group(function () {
    Route::get('/', [KelasController::class, 'displayAllKelas'])->name('MenuKelas');
    Route::get('/detail/{kelas}', [KelasController::class, 'detailKelas'])->name('DetailKelas');
    Route::get('/update', [KelasController::class, 'updateKelasMenu'])->name('UpdateKelas');
    Route::put('/update', [KelasController::class, 'updateKelasPost'])->name('UpdateKelasPost');
    Route::get('/add', [KelasController::class, 'addKelasMenu'])->name('AddKelas');
    Route::post('/add', [KelasController::class, 'addKelasPost'])->name('AddKelasPost');
    Route::get('/delete', [KelasController::class, 'confirmDeleteKelas'])->name('ConfirmDeleteKelas');
    Route::delete('/delete', [KelasController::class, 'deleteKelas'])->name('HapusKelas');
});
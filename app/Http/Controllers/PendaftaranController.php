<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function mainMenu() {
        //GET

        //TODO: Masukkan ke pada index, semua kelas dan semua peserta ditabel yang berbeda.
    }

    public function registerMenu() {
        //GET
    }

    public function registerPesertaToClasses() {
        //POST: Mencatat pendaftaran satu peserta ke satu atau lebih kelas.
    }

    public function displayAllKelasForPeserta($peserta) {
        //GET: Menampilkan daftar kelas yang diikuti oleh seorang peserta tertentu.
    }

    public function displayAllPesertaForKelas($kelas) {
        //GET: Menampilkan daftar peserta yang terdaftar pada suatu kelas tertentu.
    }
}

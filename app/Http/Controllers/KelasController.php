<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function displayAllKelas() {
        //GET: Menampilkan daftar seluruh kelas.
    }

    public function detailKelas($kelas) {
        //GET: Menampilkan detail satu kelas.
    }

    public function addKelasMenu() {
        //GET
    }

    public function addKelasPost(Request $request) {
        //POST: Menambah kelas baru.
    }

    public function updateKelasMenu($kelas) {
        //GET
    }

    public function updateKelasPost(Request $request, $kelas) {
        //PUT: Mengubah data kelas.
    }

    public function confirmDeleteKelas(Request $request) {
        //GET: Konfirmasi penghapusan Kelas.
    }

    public function deleteKelas(Request $request) {
        //DELETE: Menghapus kelas.
    }
}

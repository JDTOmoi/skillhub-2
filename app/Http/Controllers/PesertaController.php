<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function displayAllPeserta() {
        //GET: Menampilkan daftar seluruh peserta.
    }

    public function detailPeserta($peserta) {
        //GET: Menampilkan detail satu peserta.
    }

    public function addPesertaMenu() {
        //GET
    }

    public function addPesertaPost(Request $request) {
        //POST: Menambah peserta baru.
    }

    public function updatePesertaMenu($peserta) {
        //GET
    }

    public function updatePesertaPost(Request $request, $peserta) {
        //PUT: Mengubah data peserta.
    }

    public function confirmDeletePeserta(Request $request) {
        //GET: Konfirmasi penghapusan peserta.
    }

    public function deletePeserta(Request $request) {
        //DELETE: Menghapus peserta.
    }
}

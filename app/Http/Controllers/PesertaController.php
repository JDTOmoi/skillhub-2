<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function displayAllPeserta() {
        //GET: Menampilkan daftar seluruh peserta.
        $p = Peserta::all();
        return view('peserta.daftar', compact('p'));
    }

    public function detailPeserta($peserta) {
        //GET: Menampilkan detail satu peserta.
        $p = Peserta::findOrFail($peserta);
        return view('peserta.detail', compact('p'));
    }

    public function addPesertaMenu() {
        //GET
        return view('peserta.tambah');
    }

    public function addPesertaPost(Request $request) {
        //POST: Menambah peserta baru.
    }

    public function updatePesertaMenu(Request $request) {
        //GET
        $p = Peserta::findOrFail($request->peserta);
        return view('peserta.update', compact('p'));
    }

    public function updatePesertaPost(Request $request, $peserta) {
        //PUT: Mengubah data peserta.
    }

    public function confirmDeletePeserta(Request $request) {
        //GET: Konfirmasi penghapusan peserta.
        $p = Peserta::findOrFail($request->peserta);
        return view('peserta.hapus', compact('p'));
    }

    public function deletePeserta(Request $request) {
        //DELETE: Menghapus peserta.
        $p = Peserta::findOrFail($request->peserta);
        $p->delete();
    }
}

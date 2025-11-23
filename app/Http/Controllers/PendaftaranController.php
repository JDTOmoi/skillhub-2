<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Kelas;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function mainMenu() {
        //GET

        $p = Peserta::all();
        $k = Kelas::all();

        return view('pendaftaran.daftar', compact('p', 'k'));
    }

    public function registerMenu() {
        //GET
        $p = Peserta::all();
        $k = Kelas::all();

        return view('pendaftaran.daftar', compact('p', 'k'));
    }

    public function registerPesertaToClasses(Request $request) {
        //POST: Mencatat pendaftaran satu peserta ke satu atau lebih kelas.
        
        $request->validate(
            [
                'peserta' => 'required|exists:peserta,id',
                'kelas'   => 'required|array',
                'kelas.*' => 'exists:kelas,id'
            ] 
        );

        $p = Peserta::findOrFail($request->peserta);

        if (!$p) { //In case something goes wrong haha.
            return back();
        }

        foreach ($request->kelas as $k) {
            Pendaftaran::create([
                'pesertaID' => $request->peserta,
                'kelasID' => $k,
            ]);
        }

        return redirect()->route('MenuPendaftaran');
    }

    public function displayAllKelasForPeserta($peserta) {
        //GET: Menampilkan daftar kelas yang diikuti oleh seorang peserta tertentu.
        $pnd = Peserta::with('pendaftaran.kelas')->find($peserta);

        return view('pendaftaran.peserta', ['pnd' => $pnd->pendaftaran]);
    }

    public function displayAllPesertaForKelas($kelas) {
        //GET: Menampilkan daftar peserta yang terdaftar pada suatu kelas tertentu.
        $pnd = Kelas::with('pendaftaran.peserta')->find($kelas);

        return view('pendaftaran.kelas', ['pnd' => $pnd->pendaftaran]);
    }

    public function confirmDeletePendaftaran(Request $request) {
        $pnd = Pendaftaran::findOrFail($request->pendaftaran);

        if (!$pnd) {
            return back();
        }

        return view('pendaftaran.hapus', compact('pnd'));
    }

    public function deletePendaftaran(Request $request) {
        $pnd = Pendaftaran::findOrFail($request->pendaftaran);

        if (!$pnd) {
            return back();
        }

        $pnd->delete();

        return redirect()->route('MenuPendaftaran');
    }
}

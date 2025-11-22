<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function displayAllKelas() {
        //GET: Menampilkan daftar seluruh kelas.
        $k = Kelas::all();
        return view('kelas.daftar', compact('k'));
    }

    public function detailKelas($kelas) {
        //GET: Menampilkan detail satu kelas.
        $k = Kelas::findOrFail($kelas);

        if (!$k) {
            return back();
        }

        return view('kelas.detail', compact('k'));
    }

    public function addKelasMenu() {
        //GET
        return view('kelas.tambah');
    }

    public function addKelasPost(Request $request) {
        //POST: Menambah kelas baru.
        Kelas::create([
            'name' => $request->name,
            'description' => $request->description,
            'instructor' => $request->instructor
        ]);
    }

    public function updateKelasMenu(Request $request) {
        //GET
        $k = Kelas::findOrFail($request->kelas);

        if (!$k) {
            return back();
        }

        return view('kelas.update', compact('k'));
    }

    public function updateKelasPost(Request $request) {
        //PUT: Mengubah data kelas.
        $k = Kelas::findOrFail($request->kelas);

        if (!$k) {
            return back();
        }

        $k->name = $request->name;
        $k->description = $request->description;
        $k->instructor = $request->instructor; 
    }

    public function confirmDeleteKelas(Request $request) {
        //GET: Konfirmasi penghapusan Kelas.
        $k = Kelas::findOrFail($request->kelas);

        if (!$k) {
            return back();
        }

        return view('kelas.delete', compact('k'));
    }

    public function deleteKelas(Request $request) {
        //DELETE: Menghapus kelas.
        $k = Kelas::findOrFail($request->kelas);

        if (!$k) {
            return back();
        }

        $k->delete();

        return redirect()->route('MenuKelas');
    }
}

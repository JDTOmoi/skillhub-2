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

        if (!$p) {
            return back();
        }
        
        return view('peserta.detail', compact('p'));
    }

    public function addPesertaMenu() {
        //GET
        return view('peserta.tambah');
    }

    public function addPesertaPost(Request $request) {
        //POST: Menambah peserta baru.
        Peserta::create([
            "name" => $request->name,
            "dob" => $request->dob,
            "grade" => $request->grade,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "country_of_origin" => $request->country_of_origin,
            "school" => $request->school,
            "photo" => $request->photo,
            "address" => $request->address
        ]);

        return redirect()->route('MenuPeserta');
    }

    public function updatePesertaMenu(Request $request) {
        //GET
        $p = Peserta::findOrFail($request->peserta);

        if (!$p) {
            return back();
        }
        
        return view('peserta.update', compact('p'));
    }

    public function updatePesertaPost(Request $request) {
        //PUT: Mengubah data peserta.
        $p = Peserta::findOrFail($request->kelas);

        if (!$p) {
            return back();
        }

        $p->name = $request->name;
        $p->address = $request->address;
        $p->grade = $request->grade;
        $p->country_of_origin = $request->country_of_origin;
        $p->school = $request->school;
        $p->phone_number = $request->phone_number; 


        if ($request->hasFile('photo')) {
            $p->photo = $request->photo;
        }

        $p->save();

        return redirect()->route('DetailPeserta', ['peserta' => $p->id]);
    }

    public function confirmDeletePeserta(Request $request) {
        //GET: Konfirmasi penghapusan peserta.
        $p = Peserta::findOrFail($request->peserta);

        if (!$p) {
            return back();
        }

        return view('peserta.hapus', compact('p'));
    }

    public function deletePeserta(Request $request) {
        //DELETE: Menghapus peserta.
        $p = Peserta::findOrFail($request->peserta);
        $p->delete();

        return redirect()->route('MenuPeserta');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\siswaBaru;
use Illuminate\Http\Request;

class SiswaBaruController extends Controller
{
    public function update(Request $request, $id)
{
    $siswaBaru = SiswaBaru::find($id);

    // Periksa jika ada file pertama yang diunggah
    if ($request->hasFile('foto')) {
        $file1 = $request->file('foto');
        $namaFile1 = time() . '_' . $file1->getClientOriginalName();
        $file1->move(public_path('foto'), $namaFile1);
        $siswaBaru->foto = $namaFile1;
    }

    // Periksa jika ada file kedua yang diunggah
    if ($request->hasFile('kk')) {
        $file2 = $request->file('kk');
        $namaFile2 = time() . '_' . $file2->getClientOriginalName();
        $file2->move(public_path('kk'), $namaFile2);
        $siswaBaru->kk = $namaFile2;
    }

    // Periksa jika ada file ketiga yang diunggah
    if ($request->hasFile('akta')) {
        $file3 = $request->file('akta');
        $namaFile3 = time() . '_' . $file3->getClientOriginalName();
        $file3->move(public_path('akta'), $namaFile3);
        $siswaBaru->akta = $namaFile3;
    }

    // Update atribut lainnya jika ada
    $siswaBaru->name = $request->name;
    $siswaBaru->nik = $request->nik;
    $siswaBaru->jenisKelamin = $request->jenisKelamin;
    $siswaBaru->tempat_lahir = $request->tempat_lahir;
    $siswaBaru->tanggal_lahir = $request->tanggal_lahir;
    $siswaBaru->agama = $request->agama;
    $siswaBaru->status = $request->status;
    $siswaBaru->nama_ayah=$request->nama_ayah;
    $siswaBaru->pekerjaan_ayah=$request->pekerjaan_ayah;
    $siswaBaru->nama_ibu=$request->nama_ibu;
    $siswaBaru->pekerjaan_ibu=$request->pekerjaan_ibu;
    $siswaBaru->no_hp = $request->no_hp;
    $siswaBaru->kampung = $request->kampung;
    $siswaBaru->desa = $request->desa;
    $siswaBaru->alamat = $request->alamat;
    $siswaBaru->periode_id = $request->periode_id;

    // Periksa kelengkapan data sebelum menyimpan perubahan
    $isComplete = $siswaBaru->name && $siswaBaru->nik && $siswaBaru->jenisKelamin &&
                  $siswaBaru->tempat_lahir && $siswaBaru->tanggal_lahir && $siswaBaru->agama &&
                  $siswaBaru->status && $siswaBaru->nama_ayah && $siswaBaru->pekerjaan_ayah && $siswaBaru->nama_ibu && $siswaBaru->pekerjaan_ibu && $siswaBaru->no_hp && $siswaBaru->kampung && $siswaBaru->desa &&
                  $siswaBaru->alamat && $siswaBaru->foto && $siswaBaru->kk && $siswaBaru->akta && $siswaBaru->periode_id;

    // Set nilai is_complete berdasarkan kelengkapan data
    $siswaBaru->is_complete = $isComplete;
    // Simpan perubahan pada model
    $siswaBaru->save();

    return back()->with('success','Data berhasil diperbarui');
}

public function show() {
    $siswaBaru=siswaBaru::all();
    return view('components.siswa.index', compact('siswaBaru'));
}

}

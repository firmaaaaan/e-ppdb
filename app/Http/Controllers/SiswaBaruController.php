<?php

namespace App\Http\Controllers;

use App\Models\siswaBaru;
use App\Models\Periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public function edit($id) {
        $periodes = Periode::where('status_id', 1)->first();
        $siswaBaru=siswaBaru::find($id);
        return view('components.siswa.edit', compact('siswaBaru','periodes'));
    }

    public function updateAdmin(Request $request, $id)
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

        return redirect('/data-siswa')->with('success','Data berhasil diperbarui');
    }

    public function delete($id) {
        $siswaBaru = SiswaBaru::findOrFail($id);

        // Hapus user yang terkait
        $siswaBaru->user()->delete();

        // Hapus siswa
        $siswaBaru->delete();

        return back()->with('success','Data siswa dan user terkait berhasil dihapus');
    }



    public function feedback($id) {
        $data=DB::table('siswa_barus')->where('id',$id)->first();
        $status_sekarang=$data->pengumuman;
        // Mengubah status pengumuman berdasarkan status sebelumnya
        if ($status_sekarang == 2) {
            DB::table('siswa_barus')->where('id', $id)->update([
                'pengumuman' => 1 // Ubah status menjadi 1 (Diterima)
            ]);
        } elseif ($status_sekarang == 1) {
            DB::table('siswa_barus')->where('id', $id)->update([
                'pengumuman' => 0 // Ubah status menjadi 0 (Menunggu)
            ]);
        } else {
            DB::table('siswa_barus')->where('id', $id)->update([
                'pengumuman' => 2 // Ubah status menjadi 2 (Ditolak)
            ]);
        }
        return back();
    }

    public function pengumuman($id) {
        // Mengambil semua data siswa baru berdasarkan ID tertentu
    $siswaBaru = SiswaBaru::where('id', $id)->first();

    // Mengirim data siswa baru ke view 'pengumuman'
    return view('pengumuman', compact('siswaBaru'));
    }

}

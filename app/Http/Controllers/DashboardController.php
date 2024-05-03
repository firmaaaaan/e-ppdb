<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\siswaBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function indexAdmin()
    {
        // Ambil semua periode
        $periodes = Periode::all();

        // Kirim data periode ke view
        return view('admin-dashboard', compact('periodes'));
    }

    public function getSiswaBaruByPeriode(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'periode_id' => 'required|exists:periodes,id',
        ]);

        // Ambil periode berdasarkan id yang diberikan
        $periode = Periode::findOrFail($request->periode_id);

        // Ambil jumlah siswa baru untuk periode yang dipilih
        $jumlahSiswaBaru = siswaBaru::where('periode_id', $periode->id)->count();

        // Kirimkan data jumlah siswa baru sebagai respons JSON
        return response()->json(['jumlah_siswa_baru' => $jumlahSiswaBaru]);
    }

    public function error(){
        return view('error');
    }
}

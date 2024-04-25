<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\siswaBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode = Periode::all();

        // Mendapatkan data jumlah siswa baru berdasarkan periode_id
        $jumlahSiswaPerPeriode = collect();
        foreach ($periode as $p) {
            $jumlahSiswa = siswaBaru::where('periode_id', $p->id)->count();
            $jumlahSiswaPerPeriode->put($p->id, $jumlahSiswa);
        }

        return view('components.periode.periode', compact('periode', 'jumlahSiswaPerPeriode'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periode=Periode::all();
        return view('components.periode.create', compact('periode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $request->validate([
            'nama_periode'=>'required|unique:periodes',
            'kuota_pendaftar'=>'required',
            'tgl_mulai'=>'required',
            'tgl_berakhir'=>'required'
        ],[
            'nama_periode.required'=>'Periode pendaftaran harus diisi',
            'nama_periode.unique'=>'Periode pendaftaran tidak boleh sama',
            'kuota_pendaftar.required'=>'Kuota pendaftaran harus diisi',
            'tgl_mulai.required'=>'Tanggal mulai pendaftaran harus diisi',
            'tgl_berakhir.required'=>'Tanggal berakhir pendaftaran harus diisi',

        ]);
        Periode::create($request->all());
        return redirect()->route('index.periode')->with('success','Periode baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $periode=Periode::find($id);
        return view('components.periode.edit', compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_periode'=>'required',
            'kuota_pendaftar'=>'required',
            'tgl_mulai'=>'required',
            'tgl_berakhir'=>'required'
        ],[
            'nama_periode.required'=>'Periode pendaftaran harus diisi',
            'kuota_pendaftar.required'=>'Kuota pendaftaran harus diisi',
            'tgl_mulai.required'=>'Tanggal mulai pendaftaran harus diisi',
            'tgl_berakhir.required'=>'Tanggal berakhir pendaftaran harus diisi',

        ]);
        $periode=Periode::find($id);
        $periode->update($request->all());
        return redirect()->route('index.periode')->with('info','Periode berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $periode=Periode::find($id);
        $periode->delete();
        return back()->with('delete','Periode berhasil dihapus');
    }

    public function status($id) {
        $data=DB::table('periodes')->where('id',$id)->first();
        $status_sekarang=$data->status_id;
        if($status_sekarang ==1){
            DB::table('periodes')->where('id',$id)->update([
                'status_id'=>0
            ]);
        }else{
            DB::table('periodes')->where('id',$id)->update([
                'status_id'=>1
            ]);
        }
        return back();
    }
}

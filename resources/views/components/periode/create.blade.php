@extends('layouts.master')
@section('content')
@section('title','Form')
@section('slide','Form')
<div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Form Periode</h4>
    </div>
  </div>
<div class="row flex-grow">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('insert.periode') }}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label for="">Periode Pendaftaran</label>
                <input name="nama_periode" type="text" class="form-control @error('nama_periode') is-invalid
                @enderror" id="" value="{{ old('nama_periode') }}" placeholder="Masukan periode pendaftaran">
                @error('nama_periode')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Kuota Pendaftar</label>
                <input name="kuota_pendaftar" type="number" class="form-control @error('kuota_pendaftar') is-invalid
                @enderror" id="" value="{{ old('kuota_pendaftar') }}" placeholder="Masukan jumlah kuota pendaftar">
                @error('kuota_pendafatran')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tanggal Mulai</label>
                <input name="tgl_mulai" type="date" class="form-control @error('tgl_mulai') is-invalid
                @enderror" id="" value="{{ old('tgl_mulai') }}" placeholder="Masukan tanggal mulai">
                @error('tgl_mulai')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tanggal Berakhir</label>
                <input name="tgl_berakhir" type="date" class="form-control @error('tgl_berakhir') is-invalid
                @enderror" id="" value="{{ old('tgl_berakhir') }}" placeholder="Masukan tanggal berakhir">
                @error('tgl_berakhir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mr-2 mt-2">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

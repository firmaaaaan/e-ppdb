@extends('layouts.master')
@section('content')
@section('title','Form')
@section('slide','Form')
<div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Form edit data siswa</h4>
    </div>
  </div>
<div class="row flex-grow mx-6">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block mb-2">
                    <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('update.siswa', $siswaBaru->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Periode Pendaftaran</label>
                    <input type="hidden" name="periode_id" value="{{ $periodes->id }}" class="form-control" id="exampleInputName1" >
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mt-2">
                        <label class="labels">Username</label>
                        <input type="text" value="{{ $siswaBaru->username }}" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Nama Lengkap</label>
                        <input type="text" value="{{ $siswaBaru->name }}" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label class="labels">NIK* (Sesuai dengan kartu keluarga)</label>
                        <input type="number" name="nik" value="{{ $siswaBaru->nik }}" class="form-control" placeholder="Nomor Induk Keluarga">
                    </div>
                    <div class="col-md-12 mt-2"><label class="labels">Jenis Kelamin*</label>
                        <select name="jenisKelamin" class="form-control"></div>
                                <option value="">--Jenis Kelamin--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Tempat Kelahiran</label>
                        <input type="text" value="{{ $siswaBaru->tempat_lahir }}" name="tempat_lahir" class="form-control" placeholder="Tempat lahir">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Tanggal Kelahiran</label>
                        <input type="date" value="{{ $siswaBaru->tanggal_lahir }}" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Agama</label>
                        <input type="text" name="agama" value="{{ $siswaBaru->agama }}" class="form-control" placeholder="Agama">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Status dalam Kelurga</label>
                        <input type="text" name="status" value="{{ $siswaBaru->status }}" class="form-control" placeholder="Status dalam Keluarga">
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-2">
                            <label class="labels">Nama Ayah</label>
                            <input type="text" value="{{ $siswaBaru->nama_ayah }}" name="nama_ayah" class="form-control" placeholder="Nama ayah">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="labels">Pekerjaan Ayah</label>
                            <input type="text" value="{{ $siswaBaru->pekerjaan_ayah }}" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan ayah">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-2">
                            <label class="labels">Nama Ibu</label>
                            <input type="text" value="{{ $siswaBaru->nama_ibu }}" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="labels">Pekerjaan Ibu</label>
                            <input type="text" value="{{ $siswaBaru->pekerjaan_ibu }}" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">No Handphone</label>
                        <input type="number" value="{{ $siswaBaru->no_hp }}" name="no_hp" class="form-control" placeholder="Nomor WhatsApp">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Kampung</label>
                        <input type="text" name="kampung" value="{{ $siswaBaru->kampung }}" class="form-control" placeholder="Kampung">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Kelurahan/Desa</label>
                        <input type="text" name="desa" value="{{ $siswaBaru->desa }}"  class="form-control" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Alamat Lengkap</label>
                        <textarea type="text" name="alamat"  class="form-control" placeholder="Alamat">{{ $siswaBaru->alamat }}</textarea>
                    </div>
                    <label for="" class="labels mt-3">Upload Berkas</label>
                        <div class=" col-md-2 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Pas Foto (4x6)</span>
                                <input type="file" name="foto" id="">
                            </label>
                        </div>
                        <div class=" col-md-2 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Kartu keluarga</span>
                                <input type="file" name="kk" id="">
                            </label>
                        </div>
                        <div class="col-md-2 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Akta Kelahiran</span>
                                <input type="file" name="akta" id="">
                            </label>
                        </div>
                </div>
                <div class="mt-2 text-center">
                    <button class="btn btn-success profile-button" type="submit">Simpan</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.master')
@section('content')
@section('title','Profil')
@section('slide','Profil')
<style>
    .wrapper{
        height: 150px;
        width: 150px;
        position: relative;
        border: 3px solid #fff;
        border-radius: 50%;
    }
</style>
    <!-- Row start -->
    <div class="row gx-2">
        <div class="col-12">
          <div class="card mb-2">
            <div class="card-body">
              <div class="profile-bg p-5 rounded-3 mb-4">
                <!-- Row start -->
                <div class="bg-dark px-4 p-2 rounded-3">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img class="wrapper" src="{{ asset('foto/'.$siswaBaru->foto) }}" class="img-5x rounded-circle" />
                    </div>
                    <div class="col">
                      <h5 class="fw-light">{{ auth()->user()->name }}</h5>
                      <h6 class="m-0 fw-semibold">{{ auth()->user()->email }}</h6>
                        @if ($siswaBaru->is_complete == 1)
                            <div class="badge bg-success">Data sudah lengkap.</div>
                        @else
                            <div class="badge bg-danger">Data belum lengkap, silakan lengkapi data</div>
                        @endif
                    </div>
                    <div class="col-12 col-md-auto">
                      <button href="" class="btn btn-danger"> Lihat pengumuman</button>
                    </div>
                  </div>
                </div>
                <!-- Row end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->

      <!-- Row start -->
      <div class="row gx-2">
        <div class="col-xl-6 col-sm-12 col-12">
          <div class="card mb-2">
            <div class="card-header">
              <h5 class="card-title">Data siswa</h5>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block mb-2">
                            <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                        </div>
                        @endif
              <div id="ticketsGraph"></div>
              <form action="{{ route('update.profile', $siswaBaru->id) }}" method="post" enctype="multipart/form-data">
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
                                <option value="Perempuan">Perempuasn</option>
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
                        <div class=" col-md-4 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Pas Foto (4x6)</span>
                                <input type="file" name="foto" id="">
                            </label>
                        </div>
                        <div class=" col-md-4 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Kartu keluarga</span>
                                <input type="file" name="kk" id="">
                            </label>
                        </div>
                        <div class="col-md-4 mt-3">
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
        <div class="col-xl-6 col-sm-12 col-12">
          <div class="card mb-2">
            <div class="card-header">
              <h5 class="card-title">Ubah Password</h5>
            </div>
            <div class="card-body">
              <div id="callsGraph"></div>
              @if ($message = Session::get('berhasil'))
                        <div class="alert alert-success alert-block mb-2">
                            <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                        </div>
                @endif
              <form action="{{ route('changePassword') }}" method="POST">
                @csrf
                <label for="new_password">Password baru</label>
                <input type="password" class="form-control @error('new_password') is-invalid
                @enderror" name="new_password" value="{{ old('new_password') }}" id="new_password">
                @error('new_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="new_password_confirmation">Konfirmasi password</label>
                <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                <button type="submit" class="btn btn-success btn-md mt-3">Ubah password</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
@endsection

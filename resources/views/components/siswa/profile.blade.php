@extends('layouts.master')
@section('content')
@section('title','Profil')
@section('slide','Profil')
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
                      <img src="{{ asset('assets') }}/images/user.png" class="img-5x rounded-circle" />
                    </div>
                    <div class="col">
                      <h5 class="fw-light">{{ auth()->user()->name }}</h5>
                      <h6 class="m-0 fw-semibold">{{ auth()->user()->email }}</h6>
                    </div>
                    <div class="col-12 col-md-auto">
                      <a href="#!" class="btn btn-danger"> Lihat pengumuman</a>
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
              <div id="ticketsGraph"></div>
              <form action="" method="post">
                <div class="row mt-2">
                    <div class="col-md-6 mt-2">
                        <label class="labels">Username</label>
                        <input type="text" value="{{ $siswaBaru->username }}" name="username" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Nama Lengkap</label>
                        <input type="text" value="{{ $siswaBaru->name }}" name="nama_lengkap" class="form-control" value="" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label class="labels">NIK* (Sesuai dengan kartu keluarga)</label>
                        <input type="number" class="form-control" placeholder="Nomor Induk Keluarga" value="">
                    </div>
                    <div class="col-md-12 mt-2"><label class="labels">Jenis Kelamin*</label>
                        <select name="jenisKelamin" class="form-control"></div>
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuasn</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Tempat Kelahiran</label>
                        <input type="text" value="{{ $siswaBaru->tempat_lahir }}" name="tampat_lahir" class="form-control" placeholder="Tempat lahir" value="">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Tanggal Kelahiran</label>
                        <input type="date" value="{{ $siswaBaru->tanggal_lahir }}" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" value="">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" value="">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="labels">Status dalam Kelurga</label>
                        <input type="text" name="status" class="form-control" placeholder="Status dalam Keluarga" value="">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">No Handphone</label>
                        <input type="number" value="{{ $siswaBaru->no_hp }}" name="no_hp" class="form-control" placeholder="Nomor WhatsApp" value="">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Kampung</label>
                        <input type="text" name="kampung" class="form-control" placeholder="Kampung" value="">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="labels">Kelurahan/Desa</label>
                        <input type="text" name="kelurahan" class="form-control" value="" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Alamat Lengkap</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" value=""></textarea>
                    </div>
                    <label for="" class="labels mt-3">Upload Berkas</label>
                        <div class=" col-md-4 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> KK</span>
                                <input type="file" name="kk" id="">
                            </label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="label">
                                <i class="bi bi-paperclip"></i>
                                <span class="title"> Akta</span>
                                <input type="file" name="akta" id="">
                            </label>
                        </div>
                </div>
                <div class="mt-2 text-center">
                    <button class="btn btn-success profile-button" type="button">Simpan</button>
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
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
@endsection

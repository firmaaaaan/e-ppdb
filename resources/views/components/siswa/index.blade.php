@extends('layouts.master')
@section('content')
@section('title','Data Siswa')
@section('slide','Data Siswa')
<div class="row">
    <div class="col-12">
      <div class="card mb-2">
        <div class="card-body">
          <div class="mb-2 d-flex align-items-end justify-content-between">
            <h5 class="card-title">Tabel data siswa</h5>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle m-0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>NIK</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Status</th>
                  <th>Nama Ayah</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Pekerjaan Ibu</th>
                  <th>No Handphone</th>
                  <th>Kampung</th>
                  <th>Desa</th>
                  <th>Alamat Lengkap</th>
                  <th>Kartu Keluarga</th>
                  <th>Akta Kelahiran</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($siswaBaru as $item)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->nik }}</td>
                  <td>{{ $item->jenisKelamin }}</td>
                  <td>{{ $item->tempat_lahir }}</td>
                  <td>{{ $item->tanggal_lahir }}</td>
                  <td>{{ $item->agama }}</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->nama_ayah }}</td>
                  <td>{{ $item->pekerjaan_ayah }}</td>
                  <td>{{ $item->nama_ibu }}</td>
                  <td>{{ $item->pekerjaan_ibu }}</td>
                  <td>{{ $item->no_hp }}</td>
                  <td>{{ $item->kampung }}</td>
                  <td>{{ $item->desa }}</td>
                  <td>{{ $item->alamat }}</td>
                  <td>{{ $item->kk }}</td>
                  <td>{{ $item->akta }}</td>
                  <td>
                    <a class="btn btn-primary"><span class="icon-edit"></span></a>
                    <a class="btn btn-danger"><span class="icon-trash"></span></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

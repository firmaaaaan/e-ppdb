@extends('layouts.master')
@section('content')
@section('title','Data periode')
@section('slide','Data periode')
<div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Data Periode</h4>
    </div>
  </div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block mb-2">
                    <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
            </div>
            @endif
            @if ($message = Session::get('info'))
                <div class="alert alert-primary alert-block mb-2">
                    <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('delete'))
                <div class="alert alert-danger alert-block mb-2">
                    <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                </div>
            @endif
                <a href="{{ route('create.periode') }}" class="btn btn-primary btn- mb-2" style="float: right"> Tambah Data</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Periode</th>
                        <th>Kuota Pendaftar</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Jumlah Pendaftar</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($periode as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_periode }}</td>
                            <td>{{ $item->kuota_pendaftar }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d F Y')  }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tgl_berakhir)->format('d F Y')  }}</td>
                            <td>{{ $jumlahSiswaPendaftar }}</td>
                            <td><label for="" class="badge {{ ($item->status_id ==1) ? 'bg-success' : 'bg-danger' }}">{{ ($item->status_id ==1) ? 'Aktif' : 'Tidak Aktif'}}</label></td>
                            <td>
                                <a href="{{ route('status.periode', $item->id) }}" class="btn {{ ($item->status_id == 1) ? 'btn-danger' : 'btn-success' }} btn-sm"  title="{{ ($item->status_id ==1) ? 'Nonaktifkan' : 'Aktifkan' }}"><i class="bi bi-power"></i></a>
                                <a href="{{ route('edit.periode', $item->id) }}" class="btn btn-primary btn-sm"  title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('delete.periode', $item->id) }}" class="btn btn-danger btn-sm"  title="Hapus"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

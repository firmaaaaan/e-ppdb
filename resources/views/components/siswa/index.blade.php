@extends('layouts.master')
@section('content')
@section('title','Data Siswa')
@section('dataTablesCss')
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Buttons CSS -->
    <link href="https://cdn.datatables.net/buttons/2.3.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        .dt-button {
            color: #ffffff !important; /* Set text color to white */
        }
        #myTable_filter label input[type="search"] {
            color: #ffffff !important;
        }
        /* Set text color for showing entries text */
        #myTable_info {
            color: #ffffff !important;
        }
        /* Set row color to black */
        #myTable tbody tr td {
            color: #000000; /* Set row text color to black */
        }
    </style>
    @endsection
@section('slide','Data Siswa')
<div class="row">
    <div class="col-12">
      <div class="card mb-2">
        <div class="card-body">
          <div class="mb-2 d-flex align-items-end justify-content-between">
            <h5 class="card-title">Tabel data siswa</h5>
          </div>
          <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered">
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
                <tr style="color: black ">
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
@section('dataTablesScript')
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.3.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.0/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endsection

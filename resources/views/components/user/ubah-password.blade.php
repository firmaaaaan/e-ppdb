@extends('layouts.master')
@section('content')
@section('title','Form')
@section('slide','Form')
<div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Form ubah password</h4>
    </div>
  </div>
<div class="row flex-grow">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
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
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('telepon.index') }}">Back</a>
                    Detail Data Telepon
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>ID Pelanggan</label>
                        <input type="text" class="form-control" name="nomor" value="{{ $pengguna->nama }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

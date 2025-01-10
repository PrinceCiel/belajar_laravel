@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('ppdb.index') }}">Back</a>
                    Detail Data Siswa
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{ $ppdb->nama_lengkap }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" disabled> Laki-laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled> Perempuan
                    </div>
                    <div class="form-group mb-3">
                        <label>Agama</label>
                        <select class="form-select" aria-label="Default select example" name="agama" disabled>
                            <option value="{{ $ppdb->agama }}" selected disabled>{{ $ppdb->agama }}</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $ppdb->alamat }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>No Telp</label>
                        <input type="number" class="form-control" name="telp" value="{{ $ppdb->telepon }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal" value="{{ $ppdb->asal_sekolah }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

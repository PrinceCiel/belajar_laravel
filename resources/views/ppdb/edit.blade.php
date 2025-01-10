@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{ $ppdb->nama_lengkap }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki"> Laki-laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </div>
                        <div class="form-group mb-3">
                            <label>Agama</label>
                            <select class="form-select" aria-label="Default select example" name="agama">
                                <option value="{{ $ppdb->agama }}" selected>{{ $ppdb->agama }}</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $ppdb->alamat }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>No Telp</label>
                            <input type="number" class="form-control" name="telp" value="{{ $ppdb->telepon }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal" value="{{ $ppdb->asal_sekolah }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

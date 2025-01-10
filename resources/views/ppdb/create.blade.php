@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki"> Laki-laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </div>
                        <div class="form-group mb-3">
                            <label>Agama</label>
                            <select class="form-select" aria-label="Default select example" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group mb-3">
                            <label>No Telp</label>
                            <input type="number" class="form-control" name="telp">
                        </div>
                        <div class="form-group mb-3">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

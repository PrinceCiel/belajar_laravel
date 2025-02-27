@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>NIS</label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki"> Laki-laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </div>
                        <div class="form-group mb-3">
                            <label>Kelas</label><br>
                            <select class="form-control" name="kelas">
                                <option value="XI RPL 1" selected>XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Upload</label>
                            <img src="{{ asset('/images/siswa/' . $siswa->cover)}}" width="100">
                            <input type="file" class="form-control" name="cover" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

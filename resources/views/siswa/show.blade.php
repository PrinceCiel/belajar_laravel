@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Siswa</div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>NIS</label>
                        <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" disabled> Laki-laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled> Perempuan
                    </div>
                    <div class="form-group mb-3">
                        <label>Kelas</label><br>
                        <select class="form-control" name="kelas">
                            <option value="XI RPL 1" selected disabled>{{ $siswa->kelas }}</option>
                        </select>
                    </div>
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

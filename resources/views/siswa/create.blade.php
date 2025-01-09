@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('siswa.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>NIS</label>
                            <input type="number" class="form-control" name="nis">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
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
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

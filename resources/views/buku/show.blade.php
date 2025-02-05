@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('buku.index') }}">Back</a>
                    Detail Data Telepon
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Buku</label>
                        <input type="text" class="form-control" name="nama" value="{{ $buku->nama_buku }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $buku->harga }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{ $buku->stok }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Upload</label>
                        <img src="{{ asset('/images/buku/' . $buku->image)}}" width="100">
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama Penerbit</label>
                        <input type="text" class="form-control" name="stok" value="{{ $buku->penerbit->nama_penerbit }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Tanggal Terbit</label>
                        <input type="text" class="form-control" name="stok" value="{{ $buku->tanggal_terbit }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Genre</label>
                        <input type="text" class="form-control" name="stok" value="{{ $buku->genre->genre }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

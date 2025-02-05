@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('produk.index') }}">Back</a>
                    Detail Data kategori
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama" value="{{ $produk->nama_produk }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="nama" value="{{ $produk->harga }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="nama" value="{{ $produk->stok }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>ID Kategori</label>
                        <input type="text" class="form-control" name="nama" value="{{ $kategori->nama_kategori }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

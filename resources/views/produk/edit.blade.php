@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data produk</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama produk</label>
                            <input type="text" class="form-control" name="nama" value="{{ $produk->nama_produk }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Pelanggan</label><br>
                            <select class="form-control" name="id">
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>
                                @foreach ($allkategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

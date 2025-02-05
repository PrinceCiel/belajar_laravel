@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                        <div class="form-group mb-3">
                            <label>Kategori</label><br>
                            <select class="form-control" name="id">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
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

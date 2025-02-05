@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama" value="{{ $buku->nama_buku }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $buku->harga }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $buku->stok }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Upload</label>
                            <img src="{{ asset('/images/buku/' . $buku->image)}}" width="100">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Penerbit</label><br>
                            <select class="form-control" name="id_penerbit">
                                <option value="{{ $select1->id }}" selected>{{ $select1->nama_penerbit }}</option>
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tgl" value="{{ $buku->tanggal_terbit }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Genre</label><br>
                            <select class="form-control" name="id_genre">
                                <option value="{{ $select2->id }}" selected>{{ $select2->genre }}</option>
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}">{{ $data->genre }}</option>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Genre</div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('buku.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama Buku</label>
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
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Penerbit</label><br>
                            <select class="form-control" name="id_penerbit">
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tgl">
                        </div>
                        <div class="form-group mb-3">
                            <label>Genre</label><br>
                            <select class="form-control" name="id_genre">
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}">{{ $data->genre }}</option>
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

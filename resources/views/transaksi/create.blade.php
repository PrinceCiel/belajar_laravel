@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>
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
                    <form action="{{ route('transaksi.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tgl">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Buku</label><br>
                            <select class="form-control" name="id_buku">
                                @foreach ($buku as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Pembeli</label><br>
                            <select class="form-control" name="id_pembeli">
                                @foreach ($pembeli as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('kategori.index') }}">Back</a>
                    Detail Data kategori
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" value="{{ $kategori->nama_kategori }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

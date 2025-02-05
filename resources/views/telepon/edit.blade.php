@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Telepon</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>ID Pelanggan</label><br>
                            <select class="form-control" name="id">
                                <option value="{{ $pengguna->id }}" selected>{{ $pengguna->nama }}</option>
                                @foreach ($allpengguna as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
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

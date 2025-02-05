@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $penerbit->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Penerbit</label>
                            <input type="text" class="form-control" name="nama" value="{{ $penerbit->nama_penerbit }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

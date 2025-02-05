@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('penerbit.index') }}">Back</a>
                    Detail Data Telepon
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Penerbit</label>
                        <input type="text" class="form-control" name="nama" value="{{ $penerbit->nama_penerbit }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('pembeliw.index') }}">Back</a>
                    Detail Data Telepon
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama" value="{{ $pembeli->nama_pembeli }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Gender</label><br>
                        <input type="radio" class="form-check-input" name="jk" value="Male" disabled> Male
                        <input type="radio" class="form-check-input" name="jk" value="Female" disabled> Female
                    </div>
                    <div class="form-group mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="tlp" value="{{ $pembeli->telepon }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

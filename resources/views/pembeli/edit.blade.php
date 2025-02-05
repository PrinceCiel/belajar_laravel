@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Penerbit</div>
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
                    <form action="{{ route('pembeli.update', $pembeli->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama" value="{{ $pembeli->nama_pembeli }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Gender</label><br>
                            <input type="radio" class="form-check-input" name="jk" value="Male"> Male
                            <input type="radio" class="form-check-input" name="jk" value="Female"> Female
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="tlp" value="{{ $pembeli->telepon }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                    <form action="{{ route('genre.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

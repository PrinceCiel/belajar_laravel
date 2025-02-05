@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('product.index') }}">Back</a>
                    Detail Product Data
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Name Product</label>
                        <input type="text" class="form-control" name="nm" value="{{ $product->name_product }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Merk</label>
                        <input type="text" class="form-control" name="nama" value="{{ $product->merk }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="text" class="form-control" name="nama" value="{{ $product->price }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="nama" value="{{ $product->stock }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Upload</label>
                        <img src="{{ asset('/images/product/' . $product->cover)}}" width="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

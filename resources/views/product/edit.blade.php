@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product Data</div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="nm" value="{{ $product->name_product }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $product->merk }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Stock</label>
                            <input type="text" class="form-control" name="stock" value="{{ $product->stock }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Upload</label>
                            <img src="{{ asset('/images/product/' . $product->cover)}}" width="100">
                            <input type="file" class="form-control" name="cover" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

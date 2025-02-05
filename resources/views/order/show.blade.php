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
                        <label>Qty</label>
                        <input type="text" class="form-control" name="nama" value="{{ $order->quantity }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Order Date</label>
                        <input type="text" class="form-control" name="nama" value="{{ $order->order_date }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Name Customer</label>
                        <input type="text" class="form-control" name="nama" value="{{ $customer->name_customer }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

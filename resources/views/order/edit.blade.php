@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product Data</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name Product</label><br>
                            <select class="form-control" name="id_product">
                                <option value="{{ $product->id }}" selected>{{ $product->name_product }} (Current Name)</option>
                                @foreach ($allproduct as $data)
                                <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Qty</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $order->quantity }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Name Customer</label><br>
                            <select class="form-control" name="id_customer">
                                <option value="{{ $customer->id }}" selected>{{ $customer->name_customer }} (Current Name)</option>
                                @foreach ($allcustomer as $data)
                                <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
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

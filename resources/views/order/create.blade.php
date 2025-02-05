@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Order Data</div>

                <div class="card-body">
                    <form action="{{ route('order.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name Product</label><br>
                            <select class="form-control" name="id_product">
                                @foreach ($product as $data)
                                <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Qty</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                        <div class="form-group mb-3">
                            <label>Order Date</label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                        <div class="form-group mb-3">
                            <label>Name Customer</label><br>
                            <select class="form-control" name="id_customer">
                                @foreach ($customer as $data)
                                <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

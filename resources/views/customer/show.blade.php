@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('customer.index') }}">Back</a>
                    Detail Customer Data
                </div>

                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Name Customer</label>
                        <input type="text" class="form-control" name="nm" value="{{ $customer->name_customer }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="nama" value="{{ $customer->gender }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="nama" value="{{ $customer->contact }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

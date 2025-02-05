@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Customer Data</div>

                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name Customer</label>
                            <input type="text" class="form-control" name="nm" value="{{ $customer->name_customer }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Gender</label><br>
                            <input type="radio" class="form-check-input" name="gender" value="Male"> Male
                            <input type="radio" class="form-check-input" name="gender" value="Female"> Female
                        </div>
                        <div class="form-group mb-3">
                            <label>Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{ $customer->contact }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

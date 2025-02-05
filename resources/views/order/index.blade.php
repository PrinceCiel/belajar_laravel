@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container" style="width: 70rem; font-family:monospace">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-8">
            <div class="card h-100" style="width: 70rem;">
                <div class="card-header text-primary">Data Order</div>

                <div class="card-body">
                @if (session('success'))
                    Alert::success('Hore!', 'Post Created Successfully');
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                @endif
                    <a href="{{ route('order.create') }}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Name Customer</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($order as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->product->name_product }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->order_date }}</td>
                            <td>{{ $data->customer->name_customer }}</td>
                            <td>
                                <a href="{{ route('order.edit', $data->id) }}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('order.show', $data->id) }}" class="btn btn-warning">Show</a>
                                <form action="{{ route('order.destroy', $data->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

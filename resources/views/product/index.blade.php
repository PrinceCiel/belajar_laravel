@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="container" style="width: 70rem;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-8">
            <div class="card h-100" style="width: 70rem;">
                <div class="card-header text-primary">Data Product</div>

                <div class="card-body">
                @if (session('success'))
                    Alert::success('Hore!', 'Post Created Successfully');
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                @endif
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name Product</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($product as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->name_product }}</td>
                            <td>{{ $data->merk }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->stock }}</td>
                            <td>
                                <img src="{{ asset('/images/product/' . $data->cover)}}" width="100">
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $data->id) }}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('product.show', $data->id) }}" class="btn btn-warning">Show</a>
                                <form action="{{ route('product.destroy', $data->id) }}" method="post" style="display: inline-block;">
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

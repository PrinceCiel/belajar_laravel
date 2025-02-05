@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Product</div>
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
                    <form action="{{ route('product.store') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="nm">
                        </div>
                        @error ('nm')
                            <script>
                                swal({
                                    title: "{{ $message }}",
                                    text: "Mohon Isi Dengan Benar.",
                                    icon: "error",
                                    button: "OK",
                                });
                            </script>
                        @enderror
                        <div class="form-group mb-3">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk">
                        </div>
                        @error ('merk')
                            <script>
                                swal({
                                    title: "{{ $message }}",
                                    text: "Mohon Isi Dengan Benar.",
                                    icon: "error",
                                    button: "OK",
                                });
                            </script>
                        @enderror
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        @error ('price')
                            <script>
                                swal({
                                    title: "{{ $message }}",
                                    text: "Mohon Isi Dengan Benar.",
                                    icon: "error",
                                    button: "OK",
                                });
                            </script>
                        @enderror
                        <div class="form-group mb-3">
                            <label>Stock</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                        @error ('stock')
                            <script>
                                swal({
                                    title: "{{ $message }}",
                                    text: "Mohon Isi Dengan Benar.",
                                    icon: "error",
                                    button: "OK",
                                });
                            </script>
                        @enderror
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

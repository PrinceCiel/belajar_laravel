@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="container" style="width: 70rem;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-8">
            <div class="card h-100" style="width: 70rem;">
                <div class="card-header text-primary">Data Siswa</div>

                <div class="card-body">
                @if (session('success'))
                    Alert::success('Hore!', 'Post Created Successfully');
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                @endif
                    <a href="{{ route('ppdb.create') }}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($ppdb as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->agama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->asal_sekolah }}</td>
                            <td>
                                <a href="{{ route('ppdb.edit', $data->id) }}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('ppdb.show', $data->id) }}" class="btn btn-warning">Show</a>
                                <form action="{{ route('ppdb.destroy', $data->id) }}" method="post" style="display: inline-block;">
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

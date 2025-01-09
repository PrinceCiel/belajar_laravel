<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($barang as $data)
        <p>{{ $data->id }}</p>
        <p>Nama Barang : {{ $data->nama_barang }}</p>
        <p>Merk : {{ $data->merk }}</p>
        <p>Rp.{{ $data->harga }}</p>
        <hr>
    @endforeach
    
</body>
</html>
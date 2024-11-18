<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return 'Selamat Datang Di Halaman Home';
});

Route::get('/About', function () {
    return 'Selamat Datang Di Halaman About';
});

Route::get('/Contact', function () {
    return 'Selamat Datang Di Halaman Contact';
});

Route::get('/tes/{nama}/{a}/{b}/{c}/{d}', function($nm, $tm, $jk, $agm, $almt){
    return "Nama : ".$nm."<br>".
           "Tempat Lahir : ".$tm."<br>".
           "Jenis Kelamin : ".$jk."<br>".
           "Agama : ".$agm."<br>".
           "Alamat : ".$almt;
});

Route::get('/hitung/{a}/{b}', function ($a, $b) {
    $hasil = $a + $b;
    return "Bilangan 1 : ".$a."<br>".
           "Bilangan 2 : ".$b."<br>".
           "Hasil : ".$hasil;
});

Route::get('/latihan/{nama}/{tlp}/{jenis}/{namabrg}/{jumlah}/{bayar}', function($nama, $telp, $jenis, $namabrg, $jumlah, $bayar){
    switch ($jenis) {
        case 'Handphone':
            if($namabrg == "Poco"){
                $harga = 3000000;
            }elseif($namabrg == "Samsung"){
                $harga = 5000000;
            }elseif($namabrg == "Iphone"){
                $harga = 15000000;
            }
            break;
        
        case 'Laptop':
            if($namabrg == "Lenovo"){
                $harga = 4000000;
            }elseif($namabrg == "Acer"){
                $harga = 8000000;
            }elseif($namabrg == "Macbook"){
                $harga = 20000000;
            }
            break;
        
        case 'TV':
            if($namabrg == "Toshiba"){
                $harga = 5000000;
            }elseif($namabrg == "Samsung"){
                $harga = 8000000;
            }elseif($namabrg == "LG"){
                $harga = 10000000;
            }
            break;
        
        default:
            return "Error Type";
            break;
    }
    $totalkotor = $harga * $jumlah;
    if($totalkotor > 10000000){
        $cashback = 500000;
    } else {
        $cashback = "Tidak Ada";
    }
    if($bayar == "cash"){
        $potongan = 0;
    } elseif($bayar == "transfer"){
        $potongan = 50000;
    }
    if($cashback == 500000){
        $totalbersih = $totalkotor - $cashback - $potongan;
    } elseif($cashback == "Tidak Ada"){
        $totalbersih = $totalkotor - $potongan;
    }
    $harga = number_format($harga,0,",",".");
    $totalkotor = number_format($totalkotor,0,",",".");
    $cashback = number_format($cashback,0,",",".");
    $potongan = number_format($potongan,0,",",".");
    $totalbersih = number_format($totalbersih,0,",",".");
    return "Nama Pembeli : ".$nama."<br>".
           "telepon : ".$telp."<hr>".
           "Jenis Barang : ".$jenis."<br>".
           "Nama Barang : ".$namabrg."<br>".
           "Harga : ".$harga."<br>".
           "Jumlah : ".$jumlah."<hr>".
           "Total : ".$totalkotor."<br>".
           "Cashback : ".$cashback."<br>".
           "Pembayaran : ".$bayar."<br>".
           "Potongan : ".$potongan."<hr>".
           "Total Pembayaran : ".$totalbersih."<br>";
});
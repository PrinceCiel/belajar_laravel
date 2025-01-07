<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'TUF A15','merk'=>'ASUS','harga'=>12000000],
            ['nama_barang'=>'AXIOO HYPE 5','merk'=>'AXIOO','harga'=>5300000],
            ['nama_barang'=>'LOQ 15','merk'=>'LENOVO','harga'=>11000000],
            ['nama_barang'=>'ACER NITRO 5','merk'=>'NITRO','harga'=>9000000],
            ['nama_barang'=>'HP VICTUS 15','merk'=>'HP','harga'=>12000000]
        ];
        DB::table('barangs')->insert($barangs);
    }
}

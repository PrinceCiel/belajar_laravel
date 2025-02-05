<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_kategori'];
    public $timestamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
}

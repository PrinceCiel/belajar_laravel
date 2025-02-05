<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_buku','harga','stok','image','id_penerbit','tanggal_terbit','id_genre'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/buku' . $this->image))) {
            return unlink(public_path('images/buku' . $this->image));
        }
    }
}

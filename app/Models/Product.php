<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name_product','merk','price','stock','cover'];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/product' . $this->cover))) {
            return unlink(public_path('images/product' . $this->cover));
        }
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id_product');
    }
}

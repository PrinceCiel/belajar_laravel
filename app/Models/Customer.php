<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['id','name_customer','gender','contact'];
    public $timestamps = true;

    public function order()
    {
        return $this->hasMany(Order::class, 'id_customer');
    }
}

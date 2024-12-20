<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity', 'price'];

    public function produk()
    {
        return $this->belongsTo(Produk::class); // Relasi dengan model Product
    }
}

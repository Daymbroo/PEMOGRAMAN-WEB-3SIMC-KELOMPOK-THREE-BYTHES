<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'harga_jual',
        'harga_beli',
        'foto'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

}

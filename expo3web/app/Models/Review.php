<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['name', 'comment'];
}



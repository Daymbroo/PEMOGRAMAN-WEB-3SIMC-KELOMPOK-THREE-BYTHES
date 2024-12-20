<?php

// app/Models/Coupon.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    // Defining the fillable attributes to protect against mass-assignment vulnerabilities
    protected $fillable = ['code', 'discount_type', 'discount_value', 'expires_at'];

    // Defining the types of discounts
    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const DISCOUNT_TYPE_FIXED = 'fixed';

    // You can add any additional methods or relationships here as needed
}


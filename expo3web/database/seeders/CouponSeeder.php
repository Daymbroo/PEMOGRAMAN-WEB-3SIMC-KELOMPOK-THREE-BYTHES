<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CouponSeeder extends Seeder
{
    public function run()
    {
        DB::table('coupons')->insert([
            [
                'code' => 'DISCOUNT10',
                'discount_type' => 'percentage',
                'discount_value' => 10.00,
                'expires_at' => Carbon::now()->addDays(30),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'FLAT50',
                'discount_type' => 'fixed',
                'discount_value' => 50.00,
                'expires_at' => Carbon::now()->addDays(15),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'SUMMER20',
                'discount_type' => 'percentage',
                'discount_value' => 20.00,
                'expires_at' => Carbon::now()->addDays(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'WELCOME100',
                'discount_type' => 'fixed',
                'discount_value' => 100.00,
                'expires_at' => Carbon::now()->addDays(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}


<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    public function run(): void
    {
    \App\Models\Coupon::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\DiscountCode;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DiscountCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscountCode::insert([
            'code' => 'MAGIAMGIA30415',
            'from_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'to_date' => Carbon::now()->addDays(30),
            'description' => 'Mã giảm giá 30/4 - 1/5',
            'discount_price' => 200000,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
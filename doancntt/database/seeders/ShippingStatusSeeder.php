<?php

namespace Database\Seeders;

use App\Models\ShippingStatus;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShippingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingStatus::insert([
            'name' => 'waiting_pickup',
            'description' => 'Chờ lấy hàng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ShippingStatus::insert([
            'name' => 'shipping',
            'description' => 'Đang giao hàng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ShippingStatus::insert([
            'name' => 'shipped',
            'description' => 'Đã giao hàng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
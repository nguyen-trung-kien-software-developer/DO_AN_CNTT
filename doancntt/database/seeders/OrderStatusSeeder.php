<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::insert([
            'name' => 'waiting_progress',
            'description' => 'Chờ xử lý',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        OrderStatus::insert([
            'name' => 'paid',
            'description' => 'Đã thanh toán',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        OrderStatus::insert([
            'name' => 'cancel_order',
            'description' => 'Hủy đơn hàng',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
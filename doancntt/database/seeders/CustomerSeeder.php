<?php

namespace Database\Seeders;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
            'name' => 'Khách vãng lai',
            'email' => 'khachvanglai@gmail.com',
            'password' => null,
            'mobile' => null,
            'housenumber_street' => null,
            'ward_id' => null,
            'shipping_name' => null,
            'shipping_mobile' => null,
            'is_active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
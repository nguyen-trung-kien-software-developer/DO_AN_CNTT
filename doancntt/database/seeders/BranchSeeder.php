<?php

namespace Database\Seeders;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::insert([
            'name' => 'Cửa hàng Gogogreen 1',
            'housenumber_street' => '357/3A Bình Thành',
            'ward_id' => 8914,
            'order' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Branch::insert([
            'name' => 'Cửa hàng Gogogreen 2',
            'housenumber_street' => '357/3A Bình Thành',
            'ward_id' => 8914,
            'order' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Branch::insert([
            'name' => 'Cửa hàng Gogogreen 3',
            'housenumber_street' => '357/3A Bình Thành',
            'ward_id' => 8914,
            'order' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
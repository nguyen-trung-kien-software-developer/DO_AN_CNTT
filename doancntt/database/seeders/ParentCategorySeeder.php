<?php

namespace Database\Seeders;

use App\Models\ParentCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ParentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentCategory::insert([
            'name' => 'Thương hiệu Lasham',
            'introduction_id' => 1,
            'slug' => 'thuong-hieu-lasham',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategory::insert([
            'name' => 'Thương hiệu Gogogreen',
            'introduction_id' => 2,
            'slug' => 'thuong-hieu-gogogreen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ParentCategory::insert([
            'name' => 'Sản Phẩm Gian Hàng Hợp Tác',
            'introduction_id' => null,
            'slug' => 'san-pham-gian-hang-hop-tac',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
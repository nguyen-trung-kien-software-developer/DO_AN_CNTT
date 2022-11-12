<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            'name' => 'Rejuvaskin',
            'description' => 'Những sản phẩm của thương hiệu Rejuvaskin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Biocos',
            'description' => 'Những sản phẩm của thương hiệu Biocos',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Newland All Nature',
            'description' => 'Những sản phẩm của thương hiệu Newland All Nature',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'NEWLAND NATURE Co., Ltd',
            'description' => 'Những sản phẩm của thương hiệu NEWLAND NATURE Co., Ltd',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Brand::insert([
            'name' => 'Greenlab ',
            'description' => 'Những sản phẩm của thương hiệu Greenlab',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
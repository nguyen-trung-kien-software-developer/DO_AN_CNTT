<?php

namespace Database\Seeders;

use App\Models\ImageItem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ImageItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ImageItem::insert([
        //     'name' => 'products/dau_goi_duoc_lieu_498f5d3b8cd84367a43438ae002bc3a2_master.jpg',
        //     'product_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // ImageItem::insert([
        //     'name' => 'products/duoc_lieu_e3c437157cac4c1e9bdc46b207537f98_master.jpg',
        //     'product_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // ImageItem::insert([
        //     'name' => 'products/duoc_lieu__1__08721135e1ec4dbabed02f41b6156cd8_master.jpg',
        //     'product_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // ImageItem::insert([
        //     'name' => 'products/duoc_lieu_b6ac5a1b6711433e9e2c0ae5a5201e32_compact.jpg',
        //     'product_id' => 4,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        ImageItem::insert([
            'name' => 'products/13_f6b77a1c1490474ba20fbb1cda91691c_compact.png',
            'product_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ImageItem::insert([
            'name' => 'products/7_cc2b7aa3119b4e31b275e72114709227_compact.png',
            'product_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ImageItem::insert([
            'name' => 'products/8_6f4b92fb69ac47ccb1f974376f8ccc3e_compact.png',
            'product_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ImageItem::insert([
            'name' => 'products/2021-10-28-17-02-57-038_1cf8ff97d7e841e4a69401971c77c05d_compact.jpg',
            'product_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
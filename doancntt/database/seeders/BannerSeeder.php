<?php

namespace Database\Seeders;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::insert([
            'name' => 'tp-sale-1apc0hhigv6x.jpg',
            'url' => 'http://gogogreen.com/',
            'thumb' => 'banners/tp-sale-1apc0hhigv6x.jpg',
            'sort_by' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Banner::insert([
            'name' => 'thinh-phat-ship-qdmjk24spzo5.jpg',
            'url' => 'http://gogogreen.vn/',
            'thumb' => 'banners/thinh-phat-ship-qdmjk24spzo5.jpg',
            'sort_by' => 2,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
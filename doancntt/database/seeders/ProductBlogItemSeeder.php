<?php

namespace Database\Seeders;

use App\Models\ProductBlogItem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductBlogItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductBlogItem::insert([
            'product_id' => 112,
            'blog_id' => 47,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ProductBlogItem::insert([
            'product_id' => 115,
            'blog_id' => 47,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ProductBlogItem::insert([
            'product_id' => 116,
            'blog_id' => 47,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        ProductBlogItem::insert([
            'product_id' => 117,
            'blog_id' => 47,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
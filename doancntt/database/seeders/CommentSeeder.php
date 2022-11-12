<?php

namespace Database\Seeders;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            'email' => 'locnguyen@gmail.com',
            'fullname' => 'Nguyễn Hữu Lộc',
            'star' => 5.00,
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'Tuyệt vời nè',
            'product_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Comment::insert([
            'email' => 'a@gmail.com',
            'fullname' => 'Nguyễn Văn Chính',
            'star' => 4.50,
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'Pretty good',
            'product_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Comment::insert([
            'email' => 'cc@gmail.com',
            'fullname' => 'Nguyễn Cân Cành',
            'star' => 3.50,
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'Quite stable',
            'product_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Comment::insert([
            'email' => 'cb@gmail.com',
            'fullname' => 'Nguyễn Chí Bảo',
            'star' => 5.00,
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'description' => 'Qúa tốt luôn !!!',
            'product_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Chủ cửa hàng Gogogreen',
            'mobile' => ' (+84)983001217',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => '123456aA@',
            'is_active' => 1,
            'private_image' => 'users/admin.jpg',
        ]);
    }
}
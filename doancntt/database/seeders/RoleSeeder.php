<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'name' => 'Quản trị viên',
            'guard_name' => 'web',
        ]);

        Role::insert([
            'name' => 'Vai trò 1',
            'guard_name' => 'web',
        ]);

        Role::insert([
            'name' => 'Vai trò 2',
            'guard_name' => 'web',
        ]);

        Role::insert([
            'name' => 'Vai trò 3',
            'guard_name' => 'web',
        ]);
    }
}
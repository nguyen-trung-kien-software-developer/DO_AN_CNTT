<?php

namespace App\Http\Services\Role;

use Spatie\Permission\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class RoleService
{
    public function getAllRole()
    {
        $roles = Role::all();

        return $roles;
    }
}
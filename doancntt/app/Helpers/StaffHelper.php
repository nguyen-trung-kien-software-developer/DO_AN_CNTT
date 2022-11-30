<?php

namespace App\Helpers;

use App\Models\User;

class StaffHelper
{
    public static function getRoleName($user_id)
    {
        $info = '';
        $employee = User::find($user_id);
        $user_roles = $employee->getRoleNames();
        $info = $user_roles->first();

        return $info;
    }
}
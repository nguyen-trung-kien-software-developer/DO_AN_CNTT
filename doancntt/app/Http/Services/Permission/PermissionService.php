<?php

namespace App\Http\Services\Permission;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PermissionService
{
    function getAllRole()
    {
        $roles = Role::all();

        return $roles;
    }

    function getAllPermission()
    {
        $permissions = Permission::all();

        return $permissions;
    }

    function createNewRole($request)
    {
        try {
            $name = $request->input('name');
            $role = Role::create([
                'name' => $name,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s")
            ]);

            Session::flash('success', 'Tạo mới vai trò thành công');
            return $role;
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm mới vai trò thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function updateRole($request, $role)
    {
        try {
            $name = $request->input('name');
            $role->name = $name;
            $role->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $role->save();

            Session::flash('success', 'Cập nhật vai trò thành công');
            return $role;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật vai trò thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($role_id)
    {
        try {
            Role::where('id', $role_id)->delete();

            Session::flash('success', 'Xóa vai trò thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa vai trò thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
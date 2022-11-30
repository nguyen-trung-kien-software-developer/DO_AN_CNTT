<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Permission\CreateRoleFormRequest;
use App\Http\Requests\Admin\Permission\EditRoleFormRequest;
use App\Http\Services\Permission\PermissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    protected $permissionService;
    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }
    public function addRole()
    {
        return view('admin.permission.createRole');
    }

    public function storeRole(CreateRoleFormRequest $request)
    {
        $result = $this->permissionService->createNewRole($request);
        return redirect()->back();
    }

    public function roleList()
    {
        $roles = $this->permissionService->getAllRole();

        return view('admin.permission.roleList', [
            'roles' => $roles
        ]);
    }

    public function editRole(Role $role)
    {
        if ($role->name == 'Quản trị viên') {
            Session::flash('error', 'Vai trò quản trị viên không thể chỉnh sửa !');
            return redirect()->back();
        }

        return view('admin.permission.editRole', [
            'role' => $role
        ]);
    }

    public function updateRole(EditRoleFormRequest $request, Role $role)
    {
        $result = $this->permissionService->updateRole($request, $role);

        return redirect()->route('admin.permission.roleList');
    }

    public function assignPermission(Role $role)
    {
        $permissions = $this->permissionService->getAllPermission();

        return view('admin.permission.assignPermission', [
            'permissions' => $permissions,
            'role' => $role,
        ]);
    }

    public function assignPermissionToRole(Request $request, Role $role)
    {
        $data = $request->input('permission');
        if ($data) {
            $role->syncPermissions($data);
        }

        Session::flash('success', 'Cấp tác vụ cho vai trò thành công');

        return redirect()->route('admin.permission.roleList');
    }

    public function permissionList()
    {
        $permissions = $this->permissionService->getAllPermission();

        return view('admin.permission.permissionList', [
            'permissions' => $permissions,
        ]);
    }

    public function deleteRole(Role $role)
    {
        if ($role->name == 'Quản trị viên') {
            Session::flash('error', 'Vai trò quản trị viên không thể xóa !');
            return redirect()->back();
        }

        $result = $this->permissionService->deleteById($role->id);

        return redirect()->back();
    }
}
<?php

namespace App\Http\Services\User;

use App\Models\Banner;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getAllUser()
    {
        $users = User::all();

        return $users;
    }

    function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();

        return $user;
    }

    function updateUserByEmail($request)
    {
        try {
            $fullname = $request->input('fullname');
            $username = $request->input('username');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $private_image = $request->input('private_image');
            // $cover_image = $request->input('cover_image');
            $user = $this->getUserByEmail($email);

            $password = $user->password;
            $passwordInput = $request->input('password');
            if ($passwordInput == $password) {
                $password = $passwordInput;
            } else {
                $password = Hash::make($passwordInput);
            }

            $user->name = $fullname;
            $user->username = $username;
            $user->password = $password;
            $user->email = $email;
            $user->mobile = $mobile;
            $user->private_image = $private_image;
            // $user->cover_image = $cover_image;
            $user->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $user->save();

            Session::flash('success', 'Cập nhật thông tin cá nhân thành công');
            return $user;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thông tin cá nhân thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function createNewUser($request)
    {
        try {
            $name = $request->input('name');
            $username = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $private_image = $request->input('private_image');
            // $cover_image = $request->input('cover_image');

            $is_active = 0;
            if ($request->input('is_active')) {
                $is_active = $request->input('is_active');
            }

            $data = User::create([
                'name' => $name,
                'username' => $username,
                'password' => Hash::make($password),
                'email' => $email,
                'mobile' => $mobile,
                'private_image' => $private_image,
                // 'cover_image' => $cover_image,
                'is_active' => $is_active,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            $insert_lastest_id = $data->id;
            $role_name = $request->input('role');
            $user = User::find($insert_lastest_id);
            $user->syncRoles($role_name); //cấp quyền mới cho user và xóa quyền cũ cho user (nếu có)

            Session::flash('success', 'Tạo mới thành viên thành công');
            return $user;
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm mới thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function updateUser($request, $user)
    {
        try {
            $name = $request->input('name');
            $username = $request->input('username');

            $password = $user->password;
            $passwordInput = $request->input('password');

            if ($passwordInput == $password) {
                $password = $passwordInput;
            } else {
                $password = Hash::make($passwordInput);
            }

            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $private_image = $request->input('private_image');
            // $cover_image = $request->input('cover_image');

            $is_active = 0;
            if ($request->input('is_active')) {
                $is_active = $request->input('is_active');
            }

            $user->name = $name;
            $user->username = $username;
            $user->password = $password;
            $user->email = $email;
            $user->mobile = $mobile;
            $user->private_image = $private_image;
            // $user->cover_image = $cover_image;
            $user->is_active = $is_active;
            $user->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $user->save();

            $role_name = $request->input('role');
            $user->syncRoles($role_name); //cấp quyền mới cho user và xóa quyền cũ cho user (nếu có)

            Session::flash('success', 'Cập nhật thành viên thành công');
            return $user;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($user_id)
    {
        try {
            $user = User::find($user_id);
            if ($user->hasRole("Quản trị viên")) { //admin
                Session::flash('error', 'Thành viên có vai trò là quản trị nên không thể xóa !');
                return false;
            }
            User::where('id', $user_id)->delete();

            Session::flash('success', 'Xóa thành viên thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa thành viên thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
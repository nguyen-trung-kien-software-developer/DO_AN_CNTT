<?php

namespace App\Http\Services\Customer;

use App\Models\Banner;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerService
{
    function getAllCustomers()
    {
        $customers = Customer::where('id', '!=', 1)->get();

        return $customers;
    }

    function getCustomerByEmail($email)
    {
        $customer = Customer::where('email', $email)->first();

        return $customer;
    }

    public function checkCurrentPassword($current_password)
    {
        $email = Auth::guard('customer')->user()->email;

        $exist = Customer::where('email', $email)->firstOrFail();

        if ($exist) {
            if (Hash::check($current_password, $exist->password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function create($request)
    {
        try {
            $name = $request->input('fullname');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $password = $request->input('password');
            $housenumber_street = $request->input('address');
            $shipping_name = $request->input('name');
            $shipping_mobile = $request->input('mobile');
            $is_active = 0;

            $customer = Customer::create([
                'name' => (string) $name,
                'mobile' => (string) $mobile,
                'email' => (string) $email,
                'password' => $password,
                'housenumber_street' => (string) $housenumber_street,
                'shipping_name' => $shipping_name,
                'shipping_mobile' => $shipping_mobile,
                'is_active' => (string) $is_active,
            ]);

            // Auth::guard('customer')->loginUsingId($customer->id, true);

            event(new Registered($customer));

            //Send a Welcome Email After customer registered
            // $customer->notify(new WelcomeEmailNotification($verification_code));

            Session::flash('success', 'Đăng ký tài khoản thành công! Vui lòng kiểm tra email để xác thực tài khoản !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }

    public function updateAccountInformation($request)
    {
        try {
            $name = $request->input('fullname');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $housenumber_street = $request->input('housenumber_street');
            $ward_id = $request->input('ward_id');

            $customer_id = Auth::guard('customer')->user()->id;
            $customer = Customer::find($customer_id);

            $customer->name = $name;
            $customer->mobile = $mobile;
            $customer->email = $email;
            $customer->housenumber_street = $housenumber_street;
            $customer->ward_id = $ward_id;
            $customer->save();


            Session::flash('success', 'Cập nhật thông tin tài khoản thành công !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật thông tin tài khoản thất bại !');
            return false;
        }
    }

    public function updatePassword($request)
    {
        try {
            $current_password = $request->input('current_password');
            $password = $request->input('password');

            $email = Auth::guard('customer')->user()->email;
            $customer = Customer::where('email', $email)->firstOrFail();

            if (!Hash::check($current_password, $customer->password)) {
                Session::flash('error', 'Mật khẩu hiện tại không đúng. Vui lòng nhập lại !');
                return false;
            }

            $customer->password = $password;
            $customer->save();

            Session::flash('success', 'Cập nhật thông tin tài khoản thành công !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Thay đổi mật khẩu thất bại !');
            return false;
        }
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $password = $request->input('password');
            $housenumber_street = $request->input('housenumber_street');
            $shipping_name = $request->input('shipping_name');
            $shipping_mobile = $request->input('shipping_mobile');
            $ward_id = $request->input('ward');
            $is_active = $request->input('is_active');

            if (!$is_active) {
                $is_active = 0;
            }

            $cusomterCheck = $this->getCustomerByEmail($email);
            if (!empty($cusomterCheck)) {
                Session::flash('error', "Email $email đã tồn tại ! Vui lòng nhập email khác.");
                return false;
            }

            $customer = Customer::create([
                'name' => (string) $name,
                'mobile' => (string) $mobile,
                'email' => (string) $email,
                'password' => $password,
                'housenumber_street' => (string) $housenumber_street,
                'shipping_mobile' => (string) $shipping_mobile,
                'shipping_name' => $shipping_name,
                'ward_id' => $ward_id,
                'is_active' => (string) $is_active,
            ]);

            Session::flash('success', 'Tạo khách hàng thành công');
            return $customer;
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo khách hàng thất bại ! Vui lòng thử lại.');
            return false;
        }
    }

    public function update($request, $customer)
    {
        try {
            $name = $request->input('name');
            $mobile = $request->input('mobile');
            $email = $request->input('email');

            $password = $customer->password;
            $passwordInput = $request->input('password');


            $housenumber_street = $request->input('housenumber_street');
            $shipping_name = $request->input('shipping_name');
            $shipping_mobile = $request->input('shipping_mobile');
            $ward_id = $request->input('ward');
            $is_active = $request->input('is_active');

            if (!$is_active) {
                $is_active = 0;
            }

            $cusomterCheck = $this->getCustomerByEmail($email);
            if ($email != $customer->email) {
                if (!empty($cusomterCheck)) {
                    Session::flash('error', "Email $email đã tồn tại ! Vui lòng nhập email khác.");
                    return false;
                }
            }

            $customer->name = $name;
            $customer->mobile = $mobile;
            $customer->email = $email;

            if ($passwordInput != $password) {
                $customer->password = $password;
            }

            $customer->housenumber_street = $housenumber_street;
            $customer->shipping_name = $shipping_name;
            $customer->shipping_mobile = $shipping_mobile;
            $customer->ward_id = $ward_id;
            $customer->save();

            Session::flash('success', 'Cập nhật khách hàng thành công');
            return $customer;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật hàng thất bại ! Vui lòng thử lại.');
            return false;
        }
    }

    function deleteById($customer_id)
    {
        try {
            $customer = Customer::find($customer_id);
            if (count($customer->orders) > 0) {
                Session::flash('error', 'Khách hàng đã có đơn hàng. Vui lòng xóa đơn hàng trước !');
                return false;
            }

            if (count($customer->customerDiscountCodes) > 0) {
                Session::flash('error', 'Khách hàng đã sử dụng mã giảm giá. Vui lòng xóa khách hàng khác !');
                return false;
            }

            Customer::where('id', $customer_id)->delete();

            Session::flash('success', 'Xóa khách hàng thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa khách hàng thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
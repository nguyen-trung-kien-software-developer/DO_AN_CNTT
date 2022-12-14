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
        $customers = Customer::orderBy('id', 'desc')->get();

        return $customers;
    }

    function getCustomerByEmail($email)
    {
        $customer = Customer::where('email', $email)->first();

        return $customer;
    }

    function getCustomerByMobile($mobile)
    {
        $customer = Customer::where('mobile', $mobile)->first();

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
            // $is_active = 0;
            $is_active = 1;

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

            // event(new Registered($customer));

            //Send a Welcome Email After customer registered
            // $customer->notify(new WelcomeEmailNotification($verification_code));

            Session::flash('success', '????ng k?? t??i kho???n th??nh c??ng!');
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


            Session::flash('success', 'C???p nh???t th??ng tin t??i kho???n th??nh c??ng !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'C???p nh???t th??ng tin t??i kho???n th???t b???i !');
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
                Session::flash('error', 'M???t kh???u hi???n t???i kh??ng ????ng. Vui l??ng nh???p l???i !');
                return false;
            }

            $customer->password = $password;
            $customer->save();

            Session::flash('success', 'C???p nh???t th??ng tin t??i kho???n th??nh c??ng !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Thay ?????i m???t kh???u th???t b???i !');
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
                Session::flash('error', "Email $email ???? t???n t???i ! Vui l??ng nh???p email kh??c.");
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

            Session::flash('success', 'T???o kh??ch h??ng th??nh c??ng');
            return $customer;
        } catch (\Exception $err) {
            Session::flash('error', 'T???o kh??ch h??ng th???t b???i ! Vui l??ng th??? l???i.');
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
                    Session::flash('error', "Email $email ???? t???n t???i ! Vui l??ng nh???p email kh??c.");
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

            Session::flash('success', 'C???p nh???t kh??ch h??ng th??nh c??ng');
            return $customer;
        } catch (\Exception $err) {
            Session::flash('error', 'C???p nh???t h??ng th???t b???i ! Vui l??ng th??? l???i.');
            return false;
        }
    }

    function deleteById($customer_id)
    {
        try {
            $customer = Customer::find($customer_id);
            if (count($customer->orders) > 0) {
                Session::flash('error', 'Kh??ch h??ng ???? c?? ????n h??ng. Vui l??ng x??a ????n h??ng tr?????c !');
                return false;
            }

            if (count($customer->customerDiscountCodes) > 0) {
                Session::flash('error', 'Kh??ch h??ng ???? s??? d???ng m?? gi???m gi??. Vui l??ng x??a kh??ch h??ng kh??c !');
                return false;
            }

            Customer::where('id', $customer_id)->delete();

            Session::flash('success', 'X??a kh??ch h??ng th??nh c??ng');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'X??a kh??ch h??ng th???t b???i. Vui l??ng th??? l???i !');
            return false;
        }
    }
}
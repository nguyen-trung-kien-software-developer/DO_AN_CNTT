<?php

namespace App\Http\Services\DiscountCode;

use App\Models\DiscountCode;
use App\Models\CustomerDiscountCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class DiscountCodeService
{
    function getAllDiscountCodes()
    {
        $discountCodes = DiscountCode::all();

        return $discountCodes;
    }

    function getDiscountCodeByCode($code)
    {
        $discountCode = DiscountCode::where(
            [
                ['code', '=', $code],
                ['from_date', '<=', Carbon::now()->toDateTimeString()],
                ['to_date', '>=', Carbon::now()->toDateTimeString()],
                ['active', '=', 1]
            ],
        )->first();

        return $discountCode;
    }

    function checkUsedDiscountCode($customer_id, $discount_code_id)
    {
        $used = CustomerDiscountCode::where(['customer_id' => $customer_id, 'discount_code_id' => $discount_code_id])->first();

        return $used;
    }

    public function save($request)
    {
        try {
            $code = $request->input('code');
            $from_date = date('Y-m-d h:m:s', strtotime($request->input('from_date')));
            $to_date = date('Y-m-d h:m:s', strtotime($request->input('to_date')));
            $discount_price = $request->input('discount_price');
            $description = $request->input('description');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            $discountCode = DiscountCode::create([
                'code' => $code,
                'from_date' => $from_date,
                'to_date' => $to_date,
                'discount_price' => $discount_price,
                'description' => $description,
                'active' => $active,
            ]);

            Session::flash('success', 'Tạo mới mã giảm giá thành công');
            return $discountCode;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới mã giảm giá  thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $discountCode)
    {
        try {
            $code = $request->input('code');
            $from_date = date('Y-m-d h:m:s', strtotime($request->input('from_date')));
            $to_date = date('Y-m-d h:m:s', strtotime($request->input('to_date')));
            $discount_price = $request->input('discount_price');
            $description = $request->input('description');
            $active = $request->input('active');

            if (!$active) {
                $active = 0;
            }

            $discountCode->code = $code;
            $discountCode->from_date = $from_date;
            $discountCode->to_date = $to_date;
            $discountCode->discount_price = $discount_price;
            $discountCode->description = $description;
            $discountCode->active = $active;
            $discountCode->save();

            Session::flash('success', 'Cập nhật mã giảm giá thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật mã giảm giá thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($discountCode_id)
    {
        try {
            $discountCode = DiscountCode::find($discountCode_id);
            if (count($discountCode->customerDiscountCodes) > 0) {
                Session::flash('error', 'Mã giảm giá đã được sử dụng. Vui lòng xóa mã giảm giá khác !');
                return false;
            }

            DiscountCode::where('id', $discountCode_id)->delete();

            Session::flash('success', 'Xóa mã giảm giá thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa mã giảm giá thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
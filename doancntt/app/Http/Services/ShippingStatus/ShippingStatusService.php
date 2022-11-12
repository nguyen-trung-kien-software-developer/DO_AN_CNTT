<?php

namespace App\Http\Services\ShippingStatus;

use App\Models\ShippingStatus;
use Illuminate\Support\Facades\Session;

class ShippingStatusService
{
    public function getAllShippingStatuses()
    {
        $shippingStatuses = ShippingStatus::all();

        return $shippingStatuses;
    }

    public function update($request, $shippingStatus)
    {
        try {
            $description = $request->input('description');

            $shippingStatus->description = $description;
            $shippingStatus->save();

            Session::flash('success', 'Cập nhật tình trạng giao hàng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật tình trạng giao hàng thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
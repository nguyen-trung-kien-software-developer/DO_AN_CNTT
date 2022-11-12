<?php

namespace App\Http\Services\OrderStatus;

use App\Models\OrderStatus;
use Illuminate\Support\Facades\Session;

class OrderStatusService
{
    public function getAllOrderStatuses()
    {
        $orderStatuses = OrderStatus::all();

        return $orderStatuses;
    }

    public function update($request, $orderStatus)
    {
        try {
            $description = $request->input('description');

            $orderStatus->description = $description;
            $orderStatus->save();

            Session::flash('success', 'Cập nhật tình trạng đơn hàng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật tình trạng đơn hàng thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
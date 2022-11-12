<?php

namespace App\Http\Services\Dashboard;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DashboardService
{
    function getOrderListFilterCreatedDate($from_date, $to_date)
    {
        $orders = Order::whereBetween('created_date', [$from_date, $to_date])->get();

        return $orders;
    }

    function countOrderQuantityFilterCreatedDate($from_date, $to_date)
    {
        $new_order_quantity = Order::whereBetween('created_date', [$from_date, $to_date])->count('id');

        return $new_order_quantity;
    }

    function calculateRevenue($from_date, $to_date)
    {
        $orders = Order::whereBetween('created_date', [$from_date, $to_date])->get();

        $revenue = 0;
        foreach ($orders as $order) {
            foreach ($order->orderItems as $orderItem) {
                $revenue += $orderItem->total_price;
            }
            $revenue += $order->shipping_fee;
            if (!empty($order->discountCode)) {
                $revenue -= $order->discountCode->discount_price;
            }
        }

        return $revenue;
    }

    function countCustomerNumberFilterCreatedDate($from_date, $to_date)
    {
        $customer_number = Customer::whereBetween('created_at', [$from_date, $to_date])->count('id');

        return $customer_number;
    }

    function countCancelledOrderNumberFilterCreatedDate($from_date, $to_date)
    {
        $cancelled_order_number = Order::whereBetween('created_date', [$from_date, $to_date])->where('order_status_id', 3)->count('id');

        return $cancelled_order_number;
    }
}
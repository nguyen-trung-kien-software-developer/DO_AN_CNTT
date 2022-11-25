<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\DashboardService;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboardService;
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from_date = (!empty($request->input("from_date")) ? $request->input("from_date") : date("Y-m-d")) . " 00:00:00";
        $to_date = (!empty($request->input("to_date")) ? $request->input("to_date") : date("Y-m-d")) . " 23:59:59";

        $new_order_quantity = $this->dashboardService->countOrderQuantityFilterCreatedDate($from_date, $to_date);

        $revenue = $this->dashboardService->calculateRevenue($from_date, $to_date);

        $customer_number =  $this->dashboardService->countCustomerNumberFilterCreatedDate($from_date, $to_date);

        $cancelled_order_number = $this->dashboardService->countCancelledOrderNumberFilterCreatedDate($from_date, $to_date);

        $orders = $this->dashboardService->getOrderListFilterCreatedDate($from_date, $to_date);

        return view('admin.dashboard.index', [
            'orders' => $orders,
            'new_order_quantity' => $new_order_quantity,
            'revenue' => $revenue,
            'customer_number' => $customer_number,
            'cancelled_order_number' => $cancelled_order_number
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
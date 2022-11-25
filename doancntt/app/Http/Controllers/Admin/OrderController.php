<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\OrderAddFormRequest;
use App\Http\Requests\Admin\Order\OrderEditFormRequest;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Customer\CustomerService;
use App\Http\Services\DiscountCode\DiscountCodeService;
use App\Http\Services\Order\OrderService;
use App\Http\Services\OrderStatus\OrderStatusService;
use App\Http\Services\ShippingStatus\ShippingStatusService;
use App\Http\Services\Company\CompanyService;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $orderService;
    protected $customerService;
    protected $orderStatusService;
    protected $shippingStatusService;
    protected $addressService;
    protected $discountCodeService;
    protected $companyService;

    public function __construct(OrderService $orderService, CustomerService $customerService, OrderStatusService $orderStatusService, ShippingStatusService $shippingStatusService, AddressService $addressService, DiscountCodeService $discountCodeService, CompanyService $companyService)
    {
        $this->orderService = $orderService;
        $this->customerService = $customerService;
        $this->orderStatusService = $orderStatusService;
        $this->shippingStatusService = $shippingStatusService;
        $this->addressService = $addressService;
        $this->discountCodeService = $discountCodeService;
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderService->getAllOrderByIdDesc();

        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = $this->customerService->getAllCustomers();
        $orderStatuses = $this->orderStatusService->getAllOrderStatuses();
        $shippingStatuses = $this->shippingStatusService->getAllShippingStatuses();
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.order.create', [
            'customers' => $customers,
            'orderStatuses' => $orderStatuses,
            'shippingStatuses' => $shippingStatuses,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderAddFormRequest $request)
    {
        if (!empty($request->input('discount_code'))) {
            $discountCode = $this->discountCodeService->getDiscountCodeByCode($request->input('discount_code'));

            if (empty($discountCode)) {
                Session::flash('error', 'Mã giảm giá không hợp lệ');
                return redirect()->back();
            }
        }

        $order = $this->orderService->save($request);

        return redirect()->back();
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
    public function edit(Order $order)
    {
        $customers = $this->customerService->getAllCustomers();
        $orderStatuses = $this->orderStatusService->getAllOrderStatuses();
        $shippingStatuses = $this->shippingStatusService->getAllShippingStatuses();
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.order.edit', [
            'order' => $order,
            'customers' => $customers,
            'orderStatuses' => $orderStatuses,
            'shippingStatuses' => $shippingStatuses,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderEditFormRequest $request, Order $order)
    {
        // dd($request->all());
        if (!empty($request->input('discount_code'))) {
            $discountCode = $this->discountCodeService->getDiscountCodeByCode($request->input('discount_code'));

            if (empty($discountCode)) {
                Session::flash('error', 'Mã giảm giá không hợp lệ');
                return redirect()->back();
            }
        }

        $result = $this->orderService->update($order, $request);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order_id = $order->id;
        $result = $this->orderService->deleteById($order_id);

        return redirect()->back();
    }

    public function details(Order $order)
    {
        return view('admin.order.details', [
            'order' => $order
        ]);
    }

    public function billDetails(Order $order)
    {
        $company = $this->companyService->getCompanyAllInformation();

        return view('admin.order.billDetails', [
            'order' => $order,
            'company' => $company,
        ]);
    }
}
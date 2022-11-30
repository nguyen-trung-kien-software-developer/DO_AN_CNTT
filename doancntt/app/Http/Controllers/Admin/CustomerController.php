<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\CustomerAddFormRequest;
use App\Http\Requests\Admin\Customer\CustomerEditFormRequest;
use App\Http\Services\Customer\CustomerService;
use App\Http\Services\Address\AddressService;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;
    protected $addressService;
    public function __construct(CustomerService $customerService, AddressService $addressService)
    {
        $this->customerService = $customerService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = $this->customerService->getAllCustomers();


        return view('admin.customer.index', [
            'customers' => $customers,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.customer.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerAddFormRequest $request)
    {
        $customer = $this->customerService->save($request);

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
    public function edit(Customer $customer)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.customer.edit', [
            'customer' => $customer,
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
    public function update(CustomerEditFormRequest $request, Customer $customer)
    {
        $result = $this->customerService->update($request, $customer);

        if (!$result) {
            return redirect()->back();
        }
        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $result = $this->customerService->deleteById($customer->id);

        return redirect()->back();
    }
}
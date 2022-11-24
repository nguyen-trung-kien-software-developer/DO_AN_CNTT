<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Customer\AccountInformationFormRequest;
use App\Http\Requests\Site\Customer\ChangePasswordFormRequest;
use App\Http\Requests\Site\Customer\LoginFormRequest;
use App\Http\Requests\Site\Customer\RegisterFormRequest;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Customer\CustomerService;
use App\Http\Services\Order\OrderService;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\RedisQueue;

class CustomerController extends Controller
{
    protected $companyService;
    protected $customerService;
    protected $addressService;

    public function __construct(CompanyService $companyService, CustomerService $customerService, AddressService $addressService, OrderService $orderService)
    {
        $this->companyService = $companyService;
        $this->customerService = $customerService;
        $this->addressService = $addressService;
        $this->orderService = $orderService;
    }

    function login()
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name']);

        return view('site.customer.login', [
            'company' => $company
        ]);
    }

    public function checkLogin(LoginFormRequest $request)
    {
        $request->validate([
            'mobile' => 'required|max:15|exists:customers,mobile',
            'password' => 'required|min:5|max:30'
        ]);

        $mobile = $request->input('mobile');
        $password = $request->input('password');

        if (Auth::guard('customer')->attempt([
            'mobile' => $mobile,
            'password' => $password,
            'is_active' => 1,
        ], $request->input('remember'))) {
            //Laravel automatically regenerates the session ID during authentication
            $request->session()->regenerate();

            return redirect()->intended(route('site.home'));
        }

        return redirect()->back();
    }

    function register()
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name']);

        return view('site.customer.register', [
            'company' => $company
        ]);
    }


    function checkRegister(RegisterFormRequest $request)
    {

        $result = $this->customerService->create($request);

        if ($result) {
            return redirect()->route('site.customer.login');
        }

        return redirect()->back();
    }

    function verifyAccount(Request $request)
    {
        $id = $request->input('id');

        $customer = Customer::where('id', $id)->first();

        if (!empty($customer)) {
            if (empty($customer->provider_id) && $customer->hasVerifiedEmail()) {
                Session::flash('success', 'Tài khoản đã được kích hoạt ! Vui lòng đăng nhập để mua hàng.');
                return redirect()->route('site.customer.login');
            }

            if ($customer->markEmailAsVerified()) {
                event(new Verified($customer));
            }


            Auth::guard('customer')->loginUsingId($customer->id, true);
        } else {
            Session::flash('error', 'Tài khoản không tồn tại !');
        }

        return redirect()->intended(route('site.home'));
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(route('site.home'));
    }

    public function accountInformation()
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('site.customer.accountInformation', [
            'provinces' => $provinces,
        ]);
    }

    public function updateAccountInformation(AccountInformationFormRequest $request)
    {
        $result = $this->customerService->updateAccountInformation($request);

        return redirect()->back();
    }

    public function changePassword()
    {
        return view('site.customer.changePassword');
    }

    public function updateChangePassword(ChangePasswordFormRequest $request)
    {
        $result = $this->customerService->updatePassword($request);

        return redirect()->back();
    }

    public function orderHistory()
    {
        $customer_id = Auth::guard('customer')->user()->id;

        $orders = $this->orderService->getOrderByCustomerId($customer_id);

        return view('site.customer.orderHistory', [
            'orders' => $orders
        ]);
    }

    public function orderDetails(Order $order)
    {
        return view('site.customer.orderDetails', [
            'order' => $order
        ]);
    }
}
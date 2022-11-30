<?php

namespace App\Http\Controllers\Site;

use App\Events\ThankYouForBuyingEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Payment\CheckOutFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\DiscountCode\DiscountCodeService;
use App\Http\Services\Order\OrderService;
use App\Http\Services\OrderItem\OrderItemService;
use App\Models\Order;
use App\Models\Transport;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $companyService;
    protected $addressService;
    protected $cartService;
    protected $orderService;
    protected $orderItemService;
    protected $discountCodeService;

    public function __construct(CompanyService $companyService, AddressService $addressService, CartService $cartService, OrderService $orderService, OrderItemService $orderItemService, DiscountCodeService $discountCodeService)
    {
        $this->companyService = $companyService;
        $this->addressService = $addressService;
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->orderItemService = $orderItemService;
        $this->discountCodeService = $discountCodeService;
    }

    function checkout()
    {
        $carts = $this->cartService->fetch();

        if ($carts == null) {
            return redirect()->route('site.home');
        }

        $shippingFee = 0;
        if (Auth::guard('customer')->check() && !empty(Auth::guard('customer')->user()->ward_id)) {
            $province_id = Auth::guard('customer')->user()->ward->district->province->id;
            $transport = Transport::where('province_id', $province_id)->first();
            $shippingFee = $transport->price;
        }

        $total_price = 0;
        if (Cart::instance('wishlist')->subtotal() > 0) {
            $total_price = intval(str_replace(',', '', Cart::instance('wishlist')->subtotal())) + $shippingFee;
        }

        $company = $this->companyService->getCompanyInformationBySelectAttributes(['bank_account']);
        $provinces = $this->addressService->getAllProvinces();

        return view('site.payment.checkout', [
            'carts' => $carts,
            'company' => $company,
            'provinces' => $provinces,
            'total_price' => $total_price,
            'shippingFee' => $shippingFee,
        ]);
    }

    function proceed(CheckOutFormRequest $request)
    {
        if (!empty($request->input('voucher_code'))) {
            $discountCode = $this->discountCodeService->getDiscountCodeByCode($request->input('voucher_code'));

            if (empty($discountCode)) {
                Session::flash('error', 'Mã giảm giá không hợp lệ');
                return redirect()->back();
            }
        }

        $order = $this->orderService->create($request);

        if ($order == false) {
            return redirect()->back();
        }

        $order_id = $order->id;

        $orderItem = $this->orderItemService->create($order_id);

        if ($orderItem == false) {
            return redirect()->back();
        }

        $data = [];
        $data['send_email_to'] = $request->input('email');
        $data['customer_name'] = $order->shipping_name;
        $data['orderItems'] = $order->orderItems;
        $data['order'] = $order;

        event(new ThankYouForBuyingEvent($data));


        // $basic  = new Basic(env('NEXMO_KEY'), env('NEXMO_SECRET'));
        // $client = new Client($basic);

        // $message = $client->message()->send([
        //     'to' => '84334662260',
        //     'from' => 'StockX Store',
        //     'text' => 'Thank you for your buying !'
        // ]);

        // Cart::instance('wishlist')->erase(Auth::guard('customer')->user()->email);

        if (Auth::guard('customer')->check()) {
            Cart::instance('wishlist')->erase(Auth::guard('customer')->user()->email);
        }
        Cart::instance('wishlist')->destroy();

        return redirect()->route('site.payment.success', [$order_id]);
    }

    function success(Order $order)
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['hotline']);
        return view('site.payment.success', [
            'order' => $order,
            'company' => $company,
        ]);
    }
}
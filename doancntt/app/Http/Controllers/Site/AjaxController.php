<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Customer\CustomerService;
use App\Http\Services\DiscountCode\DiscountCodeService;
use App\Http\Services\Transport\TransportService;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    protected $productService;
    protected $addressService;
    protected $transportService;
    protected $discountCodeService;
    protected $customerService;

    public function __construct(ProductService $productService, AddressService $addressService, TransportService $transportService, DiscountCodeService $discountCodeService, CustomerService $customerService)
    {
        $this->productService = $productService;
        $this->addressService = $addressService;
        $this->transportService = $transportService;
        $this->discountCodeService = $discountCodeService;
        $this->customerService = $customerService;
    }

    function goToPage(Request $request)
    {
        $page = (int)$request->input('page');
        $index_page = $page - 1;
        $category_id = (int)$request->input('category_id');
        $item_per_page = 8;
        $products = $this->productService->getProductListBySubCategoryIdHavingPaginationViaAjax($request, $index_page, $item_per_page, $category_id);

        if (count($products) > 0) {
            return response()->json([
                'isSuccess' => true,
                'products' => $products
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'products' => []
        ]);
    }

    public function getDistricts(Request $request)
    {
        $districts = $this->addressService->getDistrictByProvinceId($request);

        return response()->json([
            'districts' => $districts
        ]);
    }

    public function getWards(Request $request)
    {
        $wards = $this->addressService->getWardByDistrictId($request);

        return response()->json([
            'wards' => $wards
        ]);
    }

    public function getTransport(Request $request)
    {
        $transport = $this->transportService->getTransportByProvinceId($request);

        return response()->json([
            'transport' => $transport
        ]);
    }

    function checkDiscountCode(Request $request)
    {
        $code = $request->input('discountCode');

        $discountCode = $this->discountCodeService->getDiscountCodeByCode($code);

        if (empty($discountCode)) {
            return response()->json([
                'isSuccess' => false
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'discountCode' => $discountCode,
        ]);
    }

    function notExistingEmail()
    {
        $email = $_GET["email"];
        $customer = $this->customerService->getCustomerByEmail($email);

        if (!$customer) {
            echo "true"; //not exist email
            return;
        }
        echo "false"; //exist email
        return;
    }

    function checkExistEmailInLoginForm()
    {
        $email = $_GET["email"];
        $customer = $this->customerService->getCustomerByEmail($email);

        if (!$customer) {
            echo "false";
            return;
        }
        echo "true";
        return;
    }

    function notExistingMobile()
    {
        $mobile = $_GET["mobile"];
        $customer = $this->customerService->getCustomerByMobile($mobile);

        if (!$customer) {
            echo "true"; //not exist mobile
            return;
        }
        echo "false"; //exist mobile
        return;
    }

    function checkExistMobileInLoginForm()
    {
        $mobile = $_GET["mobile"];
        $customer = $this->customerService->getCustomerByMobile($mobile);

        if (!$customer) {
            echo "false";
            return;
        }
        echo "true";
        return;
    }

    function checkExistCurrentPassword()
    {
        $currentPassword = $_GET["current_password"];
        $result = $this->customerService->checkCurrentPassword($currentPassword);

        if (!$result) {
            echo "false"; //not exist password
            return;
        }

        echo "true"; //exist password
        return;
    }

    function ajaxSearchProducts()
    {
        $pattern = $_GET["pattern"];
        $products = $this->productService->getByPattern($pattern);

        if (count($products) > 0) {
            $html = view('site.product.ajaxSearch', compact('products'))->render();

            return response()->json([
                'isSuccess' => true,
                'html' => $html,
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'message' => 'Không tìm thấy sản phẩm nào',
        ]);
    }
}
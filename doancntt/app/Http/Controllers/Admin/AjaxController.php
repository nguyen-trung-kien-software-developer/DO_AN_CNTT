<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\Ajax\AjaxService;
use App\Http\Controllers\Controller;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Transport\TransportService;
use App\Http\Services\User\UserService;
use App\Models\Customer;
use App\Models\ParentCategory;
use App\Models\Transport;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    protected $userService;
    protected $ajaxService;
    protected $transportService;
    protected $addressService;
    protected $productService;

    public function __construct(UserService $userService, AjaxService $ajaxService, AddressService $addressService, TransportService $transportService, ProductService $productService)
    {
        $this->userService = $userService;
        $this->ajaxService = $ajaxService;
        $this->transportService = $transportService;
        $this->addressService = $addressService;
        $this->productService = $productService;
    }
    function checkExistEmailInLoginForm()
    {
        $email = $_GET["email"];
        $user = $this->userService->getUserByEmail($email);

        if (!$user) {
            echo "false";
            return;
        }
        echo "true";
        return;
    }

    function uploadCompanyFile(Request $request)
    {
        $urlArr = $this->ajaxService->companyFileStore($request);

        if (!empty($urlArr['path']) && !empty($urlArr['storedName'])) {
            return response()->json([
                'isSuccess' => true,
                'url'   => $urlArr['path'],
                'storedName'   => $urlArr['storedName'],
            ]);
        }

        return response()->json(['isSuccess' => false]);
    }

    function notExistingEmail()
    {
        $email = $_GET["email"];
        $user = $this->userService->getUserByEmail($email);

        if (!$user) {
            echo "true"; //not exist email
            return;
        }
        echo "false"; //exist email
        return;
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

    public function getProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product = $this->productService->getProductById($product_id);

        if (!empty($product)) {
            return response()->json([
                'isSuccess' => true,
                'product' => $product
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'product' => null
        ]);
    }

    public function getSubCategories(Request $request)
    {
        $parentCategory_id = $request->input('parentCategory_id');
        $parentCategory = ParentCategory::find($parentCategory_id);

        if (!empty($parentCategory)) {
            return response()->json([
                'isSuccess' => true,
                'subCategories' => $parentCategory->subCategories
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'subCategories' => null
        ]);
    }

    public function getCustomer(Request $request)
    {
        $customer_id = $request->input('customer_id');

        $customer = Customer::find($customer_id);

        $provinces = $this->addressService->getAllProvinces();

        $districts = null;
        $wards = null;
        $selected_ward_id = null;
        $selected_district_id = null;
        $selected_province_id = null;
        $shipping_fee  = 0;
        if (!empty($customer->ward_id)) {
            $provinceOfCustomer = $customer->ward->district->province;
            $districtOfCustomer = $customer->ward->district;
            $districts = $provinceOfCustomer->districts;
            $wards = $districtOfCustomer->wards;
            $selected_ward_id = $customer->ward_id;
            $selected_district_id = $customer->ward->district->id;
            $selected_province_id = $customer->ward->district->province->id;
            $transport = $transport = Transport::where('province_id', $selected_province_id)->get()->first();
            $shipping_fee = $transport->price;
        }

        if (empty($customer)) {
            return response()->json([
                'isSuccess' => false,
                'customer' => null,
                'provinces' => null,
                'districts' => null,
                'wards' => null,
                'selected_ward_id' => null,
                'selected_district_id' => null,
                'selected_province_id' => null,
                'shipping_fee' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'customer' => $customer,
            'provinces' => $provinces,
            'districts' => $districts,
            'wards' => $wards,
            'selected_ward_id' => $selected_ward_id,
            'selected_district_id' => $selected_district_id,
            'selected_province_id' => $selected_province_id,
            'shipping_fee' => $shipping_fee,
        ]);
    }

    function ajaxSearchProducts()
    {
        $pattern = $_GET["pattern"];
        $type = $_GET["type"];
        $products = $this->productService->getByPattern($pattern);

        if (count($products) > 0) {
            $html = view('admin.product.ajaxSearch', compact('products', 'type'))->render();

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
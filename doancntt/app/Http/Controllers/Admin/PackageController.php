<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Package\PackageService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $packageService;
    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }

    public function display()
    {
        $carts = $this->packageService->fetch();

        if ($carts == null) {
            return response()->json([
                'isSuccess' => false,
                'carts' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'carts' => $carts,
        ]);
    }

    public function add(Request $request)
    {
        $result = $this->packageService->create($request);

        if ($result == false) {
            return response()->json([
                'isSuccess' => false,
                'message' => 'Sản phẩm không tồn tại !'
            ]);
        }

        $carts = $this->packageService->fetch();

        if ($carts == null) {
            return response()->json([
                'isSuccess' => false,
                'carts' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'carts' => $carts,
        ]);
    }

    public function update(Request $request)
    {
        $oneCart = $this->packageService->update($request);

        if (empty($oneCart)) {
            return response()->json([
                'isSuccess' => false,
                'message' => 'Cập nhật số lượng thất bại',
            ]);
        }

        $carts = $this->packageService->fetch();

        return response()->json([
            'isSuccess' => true,
            'carts' => $carts,
        ]);
    }

    public function destroy(Request $request)
    {
        $rowId = (string) $request->input('rowId');

        $this->packageService->delete($rowId);

        $carts = $this->packageService->fetch();

        return response()->json([
            'isSuccess' => true,
            'carts' => $carts,
        ]);
    }
}
<?php

namespace App\Http\Services\Brand;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BrandService
{
    function getAllBrands()
    {
        $brands = Brand::all();

        return $brands;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $description = $request->input('description');

            $brand = Brand::create([
                'name' => $name,
                'description' => $description,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới thương hiệu thành công');
            return $brand;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $brand)
    {
        try {
            $name = $request->input('name');
            $description = $request->input('description');

            $brand->name = $name;
            $brand->description = $description;
            $brand->save();

            Session::flash('success', 'Cập nhật thương hiệu thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($brand_id)
    {
        try {
            $brand = Brand::find($brand_id);
            if (count($brand->products) > 0) {
                Session::flash('error', 'Thương hiệu đã có sản phẩm. Vui lòng xóa sản phẩm trước !');
                return false;
            }

            Brand::where('id', $brand_id)->delete();

            Session::flash('success', 'Xóa thương hiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa thương hiệu thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function updateDescription($request, $brand)
    {
        try {
            $description = $request->input('description');

            $brand->description = $description;
            $brand->save();

            Session::flash('success', 'Cập nhật mô tả thương hiệu thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật mô tả thương hiệu thất bại');
            return false;
        }
    }
}
<?php

namespace App\Http\Services\SubCategory;

use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubCategoryService
{
    function getAllSubCategories()
    {
        $subCategories = SubCategory::all();

        return $subCategories;
    }

    function getSubCategoryBySlug($slug)
    {
        $subCategory = SubCategory::where('slug', $slug)->first();

        return $subCategory;
    }

    function getSubCategoryListBySlug($slug)
    {
        $subCategories = SubCategory::where('slug', $slug)->get();

        return $subCategories;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $parentCategory = $request->input('parentCategory');
            $icon_image = $request->input('icon_image');

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $subCategoryList = $this->getSubCategoryListBySlug($slug);
            if (count($subCategoryList) > 0) {
                $count = 1;
                foreach ($subCategoryList as $subCategory) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $subCategory = SubCategory::create([
                'name' => $name,
                'parent_category_id' => $parentCategory,
                'icon_image' => $icon_image,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới danh mục phụ thành công');
            return $subCategory;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $subCategory)
    {
        try {
            $name = $request->input('name');
            $parentCategory = $request->input('parentCategory');
            $icon_image = $request->input('icon_image');

            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $subCategoryList = $this->getSubCategoryListBySlug($slug);
            if (count($subCategoryList) > 0) {
                $count = 1;
                foreach ($subCategoryList as $subCategory) {
                    $count++;
                }
                $slugString = $name . '-' . $count;
                $slug = Str::slug($slugString, '-');
            }

            $subCategory->name = $name;
            $subCategory->parent_category_id = $parentCategory;
            $subCategory->icon_image = $icon_image;
            $subCategory->slug = $slug;
            $subCategory->save();

            Session::flash('success', 'Cập nhật danh mục phụ thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($subCategory_id)
    {
        try {
            $subCategory = SubCategory::find($subCategory_id);
            if (count($subCategory->products) > 0) {
                Session::flash('error', 'Danh mục phụ đã có sản phẩm. Vui lòng xóa sản phẩm trước !');
                return false;
            }

            $subCategory = SubCategory::find($subCategory_id);
            Storage::delete("public/uploads/" . $subCategory->icon_image);

            SubCategory::where('id', $subCategory_id)->delete();

            Session::flash('success', 'Xóa danh mục phụ thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục phụ thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
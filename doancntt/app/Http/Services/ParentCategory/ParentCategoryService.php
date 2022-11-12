<?php

namespace App\Http\Services\ParentCategory;

use App\Models\ParentCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ParentCategoryService
{
    function getAllParentCategories()
    {
        $parentCategories = ParentCategory::all();

        return $parentCategories;
    }

    function getAllParentCategoriesHavingLimit($limit)
    {
        $parentCategories = ParentCategory::limit(3)->get();

        return $parentCategories;
    }

    function getParentCategoryBySlug($slug)
    {
        $parentCategory = ParentCategory::where('slug', $slug)->first();

        return $parentCategory;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $introduction = $request->input('introduction');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $parentCategory = ParentCategory::create([
                'name' => $name,
                'introduction_id' => $introduction == 'null' ? null : $introduction,
                'slug' => $slug,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới danh mục chính thành công');
            return $parentCategory;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $parentCategory)
    {
        try {
            $name = $request->input('name');
            $introduction = $request->input('introduction');
            $slugString = $name;
            $slug = Str::slug($slugString, '-');

            $parentCategory->name = $name;
            $parentCategory->introduction_id = $introduction == 'null' ? null : $introduction;
            $parentCategory->slug = $slug;
            $parentCategory->save();

            Session::flash('success', 'Cập nhật danh mục chính thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($parentCategory_id)
    {
        try {
            $parentCategory = ParentCategory::find($parentCategory_id);
            if (count($parentCategory->subCategories) > 0) {
                Session::flash('error', 'Danh mục chính đã có danh mục phụ. Vui lòng xóa danh mục phụ trước !');
                return false;
            }

            ParentCategory::where('id', $parentCategory_id)->delete();

            Session::flash('success', 'Xóa danh mục chính thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa danh mục chính thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}
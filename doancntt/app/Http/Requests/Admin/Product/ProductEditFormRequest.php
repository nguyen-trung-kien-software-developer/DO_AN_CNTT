<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'made_by' => 'required',
            'created_date' => 'required',
            'inventory_qty' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'parentCategory' => 'required',
            'subCategory' => 'required',
            'brand' => 'required',
            'featured_image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'made_by.required' => 'Vui lòng nhập tên nơi xuất xứ sản phẩm',
            'created_date.required' => 'Vui lòng nhập ngày tạo sản phẩm',
            'inventory_qty.required' => 'Vui lòng nhập số lượng tồn kho',
            'price.required' => 'Vui lòng nhập giá gốc',
            'sale_price.required' => 'Vui lòng nhập giá giảm',
            'parentCategory.required' => 'Vui lòng chọn danh mục cha',
            'subCategory.required' => 'Vui lòng chọn danh mục con',
            'brand.required' => 'Vui lòng chọn thương hiệu',
            'featured_image.required' => 'Vui lòng tải ảnh nổi bật lên',
        ];
    }
}
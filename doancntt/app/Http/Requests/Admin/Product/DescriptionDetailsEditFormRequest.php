<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionDetailsEditFormRequest extends FormRequest
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
            'description_details' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'description_details.required' => 'Vui lòng nhập mô tả chi tiết sản phẩm',
        ];
    }
}
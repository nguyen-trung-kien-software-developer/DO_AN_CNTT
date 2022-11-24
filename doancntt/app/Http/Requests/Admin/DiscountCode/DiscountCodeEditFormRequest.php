<?php

namespace App\Http\Requests\Admin\DiscountCode;

use Illuminate\Foundation\Http\FormRequest;

class DiscountCodeEditFormRequest extends FormRequest
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
            'code' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Vui lòng nhập mã giảm giá !',
            'from_date.required' => 'Vui lòng nhập ngày bắt đầu giảm giá !',
            'to_date.required' => 'Vui lòng nhập ngày kết thúc giảm giá !',
            'discount_price.required' => 'Vui lòng nhập giá giảm !',
            'description.required' => 'Vui lòng nhập mô tả của mã giảm giá !',
        ];
    }
}
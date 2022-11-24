<?php

namespace App\Http\Requests\Admin\OrderStatus;

use Illuminate\Foundation\Http\FormRequest;

class OrderStatusEditFormRequest extends FormRequest
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
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Vui lòng nhập mô tả của tình trạng đơn hàng !',
        ];
    }
}
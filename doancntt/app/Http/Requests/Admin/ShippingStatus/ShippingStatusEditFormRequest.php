<?php

namespace App\Http\Requests\Admin\ShippingStatus;

use Illuminate\Foundation\Http\FormRequest;

class ShippingStatusEditFormRequest extends FormRequest
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
            'description.required' => 'Vui lòng nhập mô tả của tình trạng giao hàng !',
        ];
    }
}
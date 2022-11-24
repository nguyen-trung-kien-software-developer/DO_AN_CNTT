<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UseTutorialEditFormRequest extends FormRequest
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
            'use_tutorial' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'use_tutorial.required' => 'Vui lòng nhập hướng dẫn sử dụng sản phẩm',
        ];
    }
}
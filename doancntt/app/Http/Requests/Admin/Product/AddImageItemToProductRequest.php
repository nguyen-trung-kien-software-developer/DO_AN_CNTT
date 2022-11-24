<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddImageItemToProductRequest extends FormRequest
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
            'featured_image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'featured_image.required' => 'Vui lòng tải ảnh lên',
        ];
    }
}
<?php

namespace App\Http\Requests\Admin\Transport;

use Illuminate\Foundation\Http\FormRequest;

class TransportAddFormRequest extends FormRequest
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
            'province' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'province.required' => 'Vui lòng chọn tỉnh/thành phố !',
            'price.required' => 'Vui lòng nhập giá cước vận chuyển !',
        ];
    }
}
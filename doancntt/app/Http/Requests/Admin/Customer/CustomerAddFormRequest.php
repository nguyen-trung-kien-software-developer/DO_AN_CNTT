<?php

namespace App\Http\Requests\Admin\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerAddFormRequest extends FormRequest
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
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'shipping_name' => 'required',
            'shipping_mobile' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên khách hàng',
            'email.required' => 'Vui lòng nhập email khách hàng',
            'mobile.required' => 'Vui lòng nhập số điện thoại khách hàng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'shipping_name.required' => 'Vui lòng nhập tên người nhận',
            'shipping_mobile.required' => 'Vui lòng nhập số điện thoại người nhận',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố',
            'district.required' => 'Vui lòng chọn quận / huyện',
            'ward.required' => 'Vui lòng chọn phường / xã',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường',
        ];
    }
}
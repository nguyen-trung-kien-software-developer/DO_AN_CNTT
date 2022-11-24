<?php

namespace App\Http\Requests\Admin\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderEditFormRequest extends FormRequest
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
            'customer' => 'required',
            'order_status' => 'required',
            'shipping_status' => 'required',
            'shipping_name' => 'required',
            'shipping_mobile' => 'required',
            'shipping_email' => 'required',
            'payment_method' => 'required',
            'delivered_date' => 'exclude_if:has_appointment,false|required|date',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer.required' => 'Vui lòng chọn khách hàng',
            'order_status.required' => 'Vui lòng chọn tình trạng đơn hàng',
            'shipping_status.required' => 'Vui lòng chọn tình trạng giao hàng',
            'shipping_name.required' => 'Vui lòng nhập tên người nhận',
            'shipping_mobile.required' => 'Vui lòng nhập số điện thoại người nhận',
            'shipping_email.required' => 'Vui lòng nhập email người nhận',
            'delivered_date.exclude_if' => 'Vui lòng chọn ngày giao hàng',
            'payment_method.required' => 'Vui lòng chọn phương thức thanh toán',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố',
            'district.required' => 'Vui lòng chọn quận / huyện',
            'ward.required' => 'Vui lòng chọn phường / xã',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường',
            'delivered_date.required' => 'Vui lòng chọn ngày giao hàng',
        ];
    }
}
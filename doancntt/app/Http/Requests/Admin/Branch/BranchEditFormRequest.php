<?php

namespace App\Http\Requests\Admin\Branch;

use Illuminate\Foundation\Http\FormRequest;

class BranchEditFormRequest extends FormRequest
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
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
            'order' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên chí nhánh cửa hàng',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố',
            'district.required' => 'Vui lòng chọn quận / huyện',
            'ward.required' => 'Vui lòng chọn phường / xã',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường',
            'order.required' => 'Vui lòng nhập thứ tự chi nhánh',
        ];
    }
}
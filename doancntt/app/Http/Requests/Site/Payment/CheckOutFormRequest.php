<?php

namespace App\Http\Requests\Site\Payment;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutFormRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'numberhouse_street' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
        ];
    }
}
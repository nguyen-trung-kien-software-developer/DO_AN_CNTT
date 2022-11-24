<?php

namespace App\Http\Requests\Site\Customer;

use Illuminate\Foundation\Http\FormRequest;

class AccountInformationFormRequest extends FormRequest
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
            'housenumber_street' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
        ];
    }
}
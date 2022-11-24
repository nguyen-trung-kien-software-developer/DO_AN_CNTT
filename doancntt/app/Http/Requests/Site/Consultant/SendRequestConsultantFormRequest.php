<?php

namespace App\Http\Requests\Site\Consultant;

use Illuminate\Foundation\Http\FormRequest;

class SendRequestConsultantFormRequest extends FormRequest
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
            'mobile' => 'required',
            'email' => 'required',
            'product_type_name' => 'required',
            'content' => 'required',
        ];
    }
}
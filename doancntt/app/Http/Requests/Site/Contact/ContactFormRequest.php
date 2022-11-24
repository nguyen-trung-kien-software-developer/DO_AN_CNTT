<?php

namespace App\Http\Requests\Site\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'address' => 'required',
            'title' => 'required',
            'content' => 'required',
        ];
    }
}
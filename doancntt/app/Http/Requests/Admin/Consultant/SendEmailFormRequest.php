<?php

namespace App\Http\Requests\Admin\Consultant;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailFormRequest extends FormRequest
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
            'emails' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'emails.required' => 'Vui lòng chọn ít nhất 1 email',
            'content.required' => 'Vui lòng nhập nội dung gửi mail',
        ];
    }
}
<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginFormRequest extends FormRequest
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
            'email' => 'required|exists:users,email',
            'password' => 'required|min:5|max:30'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email người dùng !',
            'email.exists' => 'Email người dùng không tồn tại !',
            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Vui lòng nhập mật khẩu tối thiểu 5 kí tự !',
            'password.max' => 'Vui lòng nhập mật khẩu tối đa 30 kí tự !',
        ];
    }
}
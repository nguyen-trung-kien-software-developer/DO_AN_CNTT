<?php

namespace App\Http\Requests\Admin\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StaffEditFormRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|max:13',
            'username' => 'required|string',
            'password' => 'required|min:5',
            'private_image' => 'required',
            // 'cover_image' => 'required',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên thành viên !',
            'name.string' => 'Vui lòng nhập chuỗi kí tự !',
            'email.required' => 'Vui lòng nhập email !',
            'email.email' => 'Vui lòng nhập email đúng biểu mẫu. Vd: a@gmail.com !',
            'mobile.required' => 'Vui lòng nhập số điện thoại !',
            'mobile.max' => 'Vui lòng nhập số điện thoại không quá 13 chữ số !',
            'username.required' => 'Vui lòng nhập tên người dùng !',
            'username.string' => 'Vui lòng nhập chuỗi kí tự !',
            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Vui lòng nhập mật khẩu tối thiểu 5 kí tự !',
            'private_image.required' => 'Vui lòng tải ảnh đại diện lên !',
            // 'cover_image.required' => 'Vui lòng tải ảnh bìa lên !',
            'role.required' => 'Vui lòng chọn vai trò của thành viên !',
        ];
    }
}
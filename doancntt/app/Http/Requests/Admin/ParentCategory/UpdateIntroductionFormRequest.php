<?php

namespace App\Http\Requests\Admin\ParentCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIntroductionFormRequest extends FormRequest
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
            'title' => 'required',
            'represented_image' => 'required',
            'description' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề !',
            'represented_image.required' => 'Vui lòng tải ảnh đại diện lên !',
            'description.required' => 'Vui lòng nhập mô tả bài giới thiệu !',
            'content.required' => 'Vui lòng nhập nội dung bài giới thiệu !',
        ];
    }
}
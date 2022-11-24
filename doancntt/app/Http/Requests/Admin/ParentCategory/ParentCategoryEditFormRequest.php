<?php

namespace App\Http\Requests\Admin\ParentCategory;

use Illuminate\Foundation\Http\FormRequest;

class ParentCategoryEditFormRequest extends FormRequest
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
            'introduction' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục chính !',
            'introduction.required' => 'Vui lòng chọn bài giới thiệu cho danh mục chính !',

        ];
    }
}
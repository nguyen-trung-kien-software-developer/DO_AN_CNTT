<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogEditFormRequest extends FormRequest
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
            'featured_image' => 'required',
            'description' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề !',
            'featured_image.required' => 'Vui lòng tải ảnh nổi bật lên !',
            'description.required' => 'Vui lòng nhập mô tả tin tức !',
            'content.required' => 'Vui lòng nhập nội dung tin tức !',
        ];
    }
}
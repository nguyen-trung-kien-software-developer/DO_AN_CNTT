<?php

namespace App\Http\Requests\Admin\PageImage;

use Illuminate\Foundation\Http\FormRequest;

class PageImageAddFormRequest extends FormRequest
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
            'url' => 'required|string',
            'page_image' => 'required',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Vui lòng nhập đường dẫn của hình ảnh !',
            'url.string' => 'Vui lòng nhập chuỗi kí tự !',
            'page_image.required' => 'Vui lòng tải ảnh lên !',
            'description.required' => 'Vui lòng nhập mô tả hình ảnh !',
            'description.string' => 'Vui lòng nhập chuỗi kí tự !',
        ];
    }
}
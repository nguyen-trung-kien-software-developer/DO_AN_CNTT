<?php

namespace App\Http\Requests\Admin\Page;

use Illuminate\Foundation\Http\FormRequest;

class HistoryEditFormRequest extends FormRequest
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
            'timeline' => 'required',
            'parentCategory' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'timeline.required' => 'Vui lòng nhập mốc lịch sử',
            'parentCategory.required' => 'Vui lòng chọn danh mục chính',
            'description.required' => 'Vui lòng nhập mô tả lịch sử',
        ];
    }
}
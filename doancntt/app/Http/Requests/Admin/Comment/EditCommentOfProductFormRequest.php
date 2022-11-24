<?php

namespace App\Http\Requests\Admin\Comment;

use Illuminate\Foundation\Http\FormRequest;

class EditCommentOfProductFormRequest extends FormRequest
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
            'product' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'star' => 'required',
            'created_date' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập tên khách hàng',
            'product.required' => 'Vui lòng chọn sản phẩm',
            'email.required' => 'Vui lòng nhập email khách hàng',
            'mobile.required' => 'Vui lòng nhập số điện thoại khách hàng',
            'star.required' => 'Vui lòng nhập số sao đánh giá',
            'created_date.required' => 'Vui lòng nhập ngày tạo đánh giá',
            'description.required' => 'Vui lòng nhập mô tả đánh giá',
        ];
    }
}
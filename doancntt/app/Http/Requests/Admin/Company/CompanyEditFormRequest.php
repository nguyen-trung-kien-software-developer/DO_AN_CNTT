<?php

namespace App\Http\Requests\Admin\Company;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEditFormRequest extends FormRequest
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
            'email' => 'required',
            'hotline' => 'required',
            'advise_phone' => 'required',
            'bank_account' => 'required',
            'website' => 'required',
            'logo' => 'required',
            'favicon' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'housenumber_street' => 'required',
            'facebook_url' => 'required',
            'google_url' => 'required',
            'twitter_url' => 'required',
            'youtube_url' => 'required',
            'map_url' => 'required',
            'map' => 'required',
            'facebook' => 'required',
            'shipping_commit' => 'required',
            'seo_keyword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên cửa hàng',
            'email.required' => 'Vui lòng nhập email cửa hàng',
            'hotline.required' => 'Vui lòng nhập đường dây nóng của cửa hàng',
            'advise_phone.required' => 'Vui lòng nhập số điện thoại tư vấn',
            'bank_account.exclude_if' => 'Vui lòng nhập số tài khoản ngân hàng',
            'website.required' => 'Vui lòng nhập đường dẫn liên kết đến cửa hàng',
            'logo.required' => 'Vui lòng tải ảnh logo cửa hàng',
            'favicon.required' => 'Vui lòng tải ảnh favicon cửa hàng',
            'province.required' => 'Vui lòng chọn tỉnh / thành phố',
            'district.required' => 'Vui lòng chọn quận / huyện',
            'ward.required' => 'Vui lòng chọn phường / xã',
            'housenumber_street.required' => 'Vui lòng nhập số nhà, tên đường',
            'facebook_url.required' => 'Vui lòng nhập đường liên kết đến facebook của cửa hàng',
            'google_url.required' => 'Vui lòng nhập đường liên kết đến google của cửa hàng',
            'twitter_url.required' => 'Vui lòng nhập đường liên kết đến twitter của cửa hàng',
            'youtube_url.required' => 'Vui lòng nhập đường liên kết đến youtube của cửa hàng',
            'map_url.required' => 'Vui lòng nhập đường liên kết đến bản đồ của cửa hàng',
            'map.required' => 'Vui lòng nhập bản đồ của cửa hàng',
            'facebook.required' => 'Vui lòng nhập facebook của cửa hàng',
            'shipping_commit.required' => 'Vui lòng nhập cam kết giao hàng',
            'seo_keyword.required' => 'Vui lòng nhập từ khóa SEO mặc định',
        ];
    }
}
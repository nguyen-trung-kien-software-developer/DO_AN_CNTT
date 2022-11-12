<?php

namespace Database\Seeders;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            'name' => "Công ty bán nhân sâm và mỹ phẩm Gogogreen",
            'logo' => "company/logo.png",
            'favicon' => "company/favicon.ico",
            'email' => "gogogreenvn@gmail.com",
            'hotline' => "(+84)908673306",
            'advise_phone' => "(+84)983001217",
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7837.894409410436!2d106.58659261664707!3d10.815352352023876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ba1f4f46a45%3A0x9e9a6600b2887277!2zMzU3LCA1MTMvMyBCw6xuaCBUaMOgbmgsIELDrG5oIEjGsG5nIEjDsmEgQiwgQsOsbmggVMOibiwgSOG7kyBDaMOtIE1pbmggMDgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1522819359473" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'map_url' => 'https://goo.gl/maps/RrrZo74pAQ9roup48',
            'facebook' => '<div class="fb-page" data-href="https://www.facebook.com/Gogogreen.vn/"
            data-tabs="timeline" data-width="180" data-height="60" data-small-header="false"
            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Gogogreen.vn/" class="fb-xfbml-parse-ignore"><a
                    href="https://www.facebook.com/Gogogreen.vn/">GogoGreen</a></blockquote></div>',
            'facebook_url' => 'https://www.facebook.com/Gogogreen.vn/',
            'google_url' => 'https://www.facebook.com/Gogogreen.vn/',
            'twitter_url' => 'https://www.facebook.com/Gogogreen.vn/',
            'youtube_url' => 'https://www.facebook.com/Gogogreen.vn/',
            'shipping_commit' => '<div class="note_logistic_info" style="user-select: auto;">Sản phẩm được giao và thu tiền tận nơi trong vòng 24 giờ đến các&nbsp;<span style="user-select: auto;">quận/huyện</span>&nbsp;tại TP Hồ Chí Minh, đối với đơn hàng ở tỉnh tùy thuộc vào khoảng cách địa lý,&nbsp;<a href="https://gogogreen.vn/" style="user-select: auto;">gogogreen.vn/</a>&nbsp;luôn ưu tiên giao hàng nhanh nhất có thể. Các trường hợp cần giao gấp hãy liên hệ trực tiếp ĐT:&nbsp;<a href="tel:(+84)908673306" style="user-select: auto;">(+84)908673306</a>&nbsp;để được giao hàng ngay.&nbsp;<a href="https://gogogreen.vn/huong-dan-mua-hang.html" target="_blank" style="user-select: auto;">Chi tiết</a></div>',
            'bank_account' => '1985432873278318',
            "website" => "https://gogogreen.vn",
            'housenumber_street' => "357/3A Bình Thành",
            "ward_id" => 8914,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
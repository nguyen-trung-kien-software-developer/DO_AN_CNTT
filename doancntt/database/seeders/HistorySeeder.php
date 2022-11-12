<?php

namespace Database\Seeders;

use App\Models\History;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::insert([
            'description' => '<li>Bắt đầu công tác khôi phục nguồn gen của giống Sâm núi quí hiếm vùng Punggi trên đỉnh núi Sobaek</li>',
            'timeline' => 2002,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Hoàn thành công tác khôi phục nguồn gen Lasham</li>
            <li>Thành lập Nông trại Yusim</li>
            <li>Xin giấy phép nuôi trồng với Cục lâm nghiệp</li>',
            'timeline' => 2011,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Đăng ký với Viện phát triển Nông Lâm nghiệp là đơn vị khai thác</li>
            <li>Nhận được giải thưởng sản phẩm ưu tú</li>',
            'timeline' => 2012,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Cung cấp hàng cho các Trung tâm thương mại và các siêu thị lớn</li>',
            'timeline' => 2013,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Cung cấp thảo dược Organic cho Hợp tác xã</li>',
            'timeline' => 2014,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Phát triển, gia công sản phẩm Lasham</li>',
            'timeline' => 2015,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Đổi tên thành công ty Nông nghiệp Lasham</li>
            <li>Có bản quyền phát minh sáng chế sản phẩm</li>',
            'timeline' => 2017,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        History::insert([
            'description' => '<li>Thành lập pháp nhân tại Việt Nam</li>
            <li>Tập trung xuất khẩu sang các nước Đông Nam Á</li>',
            'timeline' => 2018,
            'parent_category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
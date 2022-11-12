<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #dashboard
        Permission::insert([
            'name' => "Tổng quan",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #order
        Permission::insert([
            'name' => "Hiển thị danh sách đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem chi tiết đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #orderItem
        Permission::insert([
            'name' => "Hiển thị danh sách hệ thống đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa hệ thống đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa hệ thống đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #product
        Permission::insert([
            'name' => "Hiển thị danh sách sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem mô tả sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem mô tả chi tiết sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem hướng dẫn sử dụng sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm hình ảnh liên quan sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa hình ảnh liên quan sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa đánh giá sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #image
        Permission::insert([
            'name' => "Hiển thị danh sách hình ảnh sản phẩm",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Hiển thị danh sách hình ảnh trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm hình ảnh trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa hình ảnh trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa hình ảnh trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #comment
        Permission::insert([
            'name' => "Hiển thị danh sách đánh giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #introduction
        Permission::insert([
            'name' => "Hiển thị danh sách bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem mô tả bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem nội dung bài giới thiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #parentCategory
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem bài giới thiệu của danh mục chính",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #subCategory
        Permission::insert([
            'name' => "Hiển thị danh sách danh mục phụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm danh mục phụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa danh mục phụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa danh mục phụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #brand
        Permission::insert([
            'name' => "Hiển thị danh sách thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem mô tả thương hiệu",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #blog
        Permission::insert([
            'name' => "Hiển thị danh sách tin tức",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm tin tức",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tin tức",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa tin tức",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xem nội dung chi tiết tin tức",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #transport
        Permission::insert([
            'name' => "Hiển thị danh sách vận chuyển",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm vận chuyển",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa vận chuyển",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa vận chuyển",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #discountCode
        Permission::insert([
            'name' => "Hiển thị danh sách mã giảm giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm mã giảm giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa mã giảm giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa mã giảm giá",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #slider
        Permission::insert([
            'name' => "Hiển thị danh sách slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa slider",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #page
        Permission::insert([
            'name' => "Chỉnh sửa các trang thông tin",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Hiển thị danh sách lịch sử",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm lịch sử",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa lịch sử",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa lịch sử",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #company
        Permission::insert([
            'name' => "Hiển thị thông tin cửa hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #branch
        Permission::insert([
            'name' => "Hiển thị danh sách chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa chi nhánh",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #consultant
        Permission::insert([
            'name' => "Hiển thị danh sách hỗ trợ tư vấn",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa hỗ trợ tư vấn",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Gửi mail phản hồi tư vấn",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #customer
        Permission::insert([
            'name' => "Hiển thị danh sách khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa khách hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #orderStatus
        Permission::insert([
            'name' => "Hiển thị danh sách tình trạng đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tình trạng đơn hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #shippingStatus
        Permission::insert([
            'name' => "Hiển thị danh sách tình trạng giao hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa tình trạng giao hàng",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #staff
        Permission::insert([
            'name' => "Hiển thị danh sách thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa thành viên",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        #permission
        Permission::insert([
            'name' => "Hiển thị danh sách vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Thêm vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Chỉnh sửa vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Xóa vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Cấp tác vụ cho vai trò",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Permission::insert([
            'name' => "Hiển thị danh sách tác vụ",
            'guard_name' => 'web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
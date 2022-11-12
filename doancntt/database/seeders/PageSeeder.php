<?php

namespace Database\Seeders;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Page::insert(
        //     [
        //         'title' => 'Hướng dẫn mua hàng',
        //         'content' => '<p style="text-align: center; user-select: auto;"><img alt="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát" src="https://nhansamthinhphat.com/uploads/article/images/huong-dan-quy-trinh-mua-nhan-hang-tai-nhan-sam-thinh-phat-1.jpg" style="height: 927px; text-align: center; width: 851px; user-select: auto;" title="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát"> <img alt="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát" src="https://nhansamthinhphat.com/uploads/article/images/huong-dan-quy-trinh-mua-nhan-hang-tai-nhan-sam-thinh-phat-2.jpg" style="height: 874px; margin: -7px; text-align: center; width: 851px; user-select: auto;" title="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát"></p><p style="text-align: justify; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Đặt hàng trên Nhân Sâm Thịnh Phát rất đơn giản, bạn chỉ cần làm theo 4 bước sau:</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">1.&nbsp;Tìm sản phẩm</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bạn có thể tìm kiếm sản phẩm theo một trong các cách sau:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Gõ tên sản phẩm vào mục tìm kiếm</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Tìm theo danh mục:ví dụ Hồng sâm Hàn Quốc</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">2. Thêm sản phẩm vào giỏ hàng</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Khi đã tìm được sản phẩm mong muốn, bạn chỉ cần bấm vào hình hoặc tên sản phẩm để vào được trang thông tin chi tiết của sản phẩm, sau đó:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 1: Kiểm tra thông tin sản phẩm, giá, thông tin khuyến mãi,…</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 2: Chọn số lượng mong muốn</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 3: Chọn Mua Ngay</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-01.jpg" style="height: 567px; width: 750px; user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><strong style="user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">3. Kiểm tra giỏ hàng và đặt hàng:</span></span></strong></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Để đặt nhiều sản phẩm khác nhau vào cùng 1 đơn hàng, vui lòng thực hiện theo các bước sau:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">a. Chọn “Tiếp tục mua sắm”</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">b. Thêm sản phẩm vào giỏ hàng như ở Bước 2.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✻&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Quá&nbsp;trình này có thể lặp lại cho đến khi quý khách hoàn tất việc bỏ tất cả các sản phẩm cần đặt mua vào giỏ hàng.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Sau khi bạn đã có đủ sản phẩm cần đặt trong giỏ hàng, bạn tiếp tục các bước sau để đặt hàng:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">c. Điều chỉnh số lượng sản phẩm</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">d. Bấm “Hoàn tất đơn hàng” để bắt đầu đặt hàng</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-02.jpg" style="user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><strong style="user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">4. Điền thông tin đặt hàng:</span></span></strong></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">a. Thông tin giao hàng:</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bạn cần điền đầy đủ thông tin giao hàng để Nhân Sâm Thịnh Phát có thể phục vụ bạn tốt nhất</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-03.jpg" style="user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Sau khi bấm HOÀN TẤT, Nhân Sâm Thịnh Phát sẽ liên lạc với bạn để xác nhận lại đơn hàng với bạn.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">b. Thanh toán:</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Nhân Sâm Thịnh Phát có 2 hình thức thanh toán cho bạn chọn:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✪&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Thanh toán khi giao hàng (COD)</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✪&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Thanh toán chuyển khoản: bạn chuyển khoản số tiền TỔNG CỘNG của đơn hàng vào tài khoản của Nhân Sâm Thịnh Phát theo thông tin như sau:</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✔&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">1/ Trần Thị Hiền</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">0600 3841 0876</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Ngân hàng Sacombank- CN Gò Vấp - TPHCM</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✔&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">2/ Trần Thị Hiền</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">190 25712273 015</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Ngân hàng Techcombank - CN Nguyễn Oanh - TPHCM</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">→&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">Nếu bạn gặp bất cứ vấn đề gì, vui lòng liên hệ với Nhân Sâm Thịnh Phát qua số hotline 090 7799988</strong></span></span></p>',
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     ]
        // );
        // Page::insert([
        //     'title' => 'Phương thức đặt hàng',
        //     'content' => '<p style="text-align: center; user-select: auto;"><img alt="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát" src="https://nhansamthinhphat.com/uploads/article/images/huong-dan-quy-trinh-mua-nhan-hang-tai-nhan-sam-thinh-phat-1.jpg" style="height: 927px; text-align: center; width: 851px; user-select: auto;" title="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát"> <img alt="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát" src="https://nhansamthinhphat.com/uploads/article/images/huong-dan-quy-trinh-mua-nhan-hang-tai-nhan-sam-thinh-phat-2.jpg" style="height: 874px; margin: -7px; text-align: center; width: 851px; user-select: auto;" title="Hướng dẫn quy trình mua, nhận hàng tại Nhân Sâm Thịnh Phát"></p><p style="text-align: justify; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Đặt hàng trên Nhân Sâm Thịnh Phát rất đơn giản, bạn chỉ cần làm theo 4 bước sau:</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">1.&nbsp;Tìm sản phẩm</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bạn có thể tìm kiếm sản phẩm theo một trong các cách sau:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Gõ tên sản phẩm vào mục tìm kiếm</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Tìm theo danh mục:ví dụ Hồng sâm Hàn Quốc</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">2. Thêm sản phẩm vào giỏ hàng</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Khi đã tìm được sản phẩm mong muốn, bạn chỉ cần bấm vào hình hoặc tên sản phẩm để vào được trang thông tin chi tiết của sản phẩm, sau đó:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 1: Kiểm tra thông tin sản phẩm, giá, thông tin khuyến mãi,…</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 2: Chọn số lượng mong muốn</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bước 3: Chọn Mua Ngay</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-01.jpg" style="height: 567px; width: 750px; user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><strong style="user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">3. Kiểm tra giỏ hàng và đặt hàng:</span></span></strong></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Để đặt nhiều sản phẩm khác nhau vào cùng 1 đơn hàng, vui lòng thực hiện theo các bước sau:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">a. Chọn “Tiếp tục mua sắm”</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">b. Thêm sản phẩm vào giỏ hàng như ở Bước 2.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✻&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Quá&nbsp;trình này có thể lặp lại cho đến khi quý khách hoàn tất việc bỏ tất cả các sản phẩm cần đặt mua vào giỏ hàng.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Sau khi bạn đã có đủ sản phẩm cần đặt trong giỏ hàng, bạn tiếp tục các bước sau để đặt hàng:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">c. Điều chỉnh số lượng sản phẩm</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">►&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">d. Bấm “Hoàn tất đơn hàng” để bắt đầu đặt hàng</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-02.jpg" style="user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">❂&nbsp;</span><strong style="user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">4. Điền thông tin đặt hàng:</span></span></strong></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">a. Thông tin giao hàng:</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Bạn cần điền đầy đủ thông tin giao hàng để Nhân Sâm Thịnh Phát có thể phục vụ bạn tốt nhất</span></span></p><p style="text-align: center; user-select: auto;"><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><img alt="" src="https://nhansamthinhphat.com/uploads/article/images/phuong-thuc-dat-hang-03.jpg" style="user-select: auto;"></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Sau khi bấm HOÀN TẤT, Nhân Sâm Thịnh Phát sẽ liên lạc với bạn để xác nhận lại đơn hàng với bạn.</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✡&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">b. Thanh toán:</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">➢&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Nhân Sâm Thịnh Phát có 2 hình thức thanh toán cho bạn chọn:</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✪&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Thanh toán khi giao hàng (COD)</span></span></p><p style="user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✪&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Thanh toán chuyển khoản: bạn chuyển khoản số tiền TỔNG CỘNG của đơn hàng vào tài khoản của Nhân Sâm Thịnh Phát theo thông tin như sau:</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✔&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">1/ Trần Thị Hiền</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">0600 3841 0876</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Ngân hàng Sacombank- CN Gò Vấp - TPHCM</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✔&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">2/ Trần Thị Hiền</strong></span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">190 25712273 015</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">✧&nbsp;</span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;">Ngân hàng Techcombank - CN Nguyễn Oanh - TPHCM</span></span></p><p style="text-align: justify; user-select: auto;"><span style="color: rgb(31, 188, 0); user-select: auto;"><span style="font-family: arial, sans-serif; font-size: 12.8px; user-select: auto;">→&nbsp;</span></span><span style="font-size: 14px; user-select: auto;"><span style="font-family: verdana, geneva, sans-serif; user-select: auto;"><strong style="user-select: auto;">Nếu bạn gặp bất cứ vấn đề gì, vui lòng liên hệ với Nhân Sâm Thịnh Phát qua số hotline 090 7799988</strong></span></span></p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
        // Page::insert([
        //     'title' => 'Chính sách bán hàng',
        //     'content' => '<p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Chúng tôi là Công ty TNHH GoGoGreen, địa chỉ trụ sở chính tại 357/3A Đường Bình Thành, P. Bình Hưng Hòa B, Q. Bình Tân, TP.HCM, hoạt động kinh doanh thương mại điện tử qua trang web www.gogogreen.vn&nbsp;(sau đây được gọi là “GoGoGreen” hoặc “chúng tôi”).</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Xin vui lòng đọc kỹ trước khi quyết định mua hàng:</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>1. Hướng dẫn sử dụng web</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Khi vào web của chúng tôi, người dùng tối thiểu phải 18 tuổi hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Chúng tôi cấp giấy phép sử dụng để bạn có thể mua sắm trên web trong khuôn khổ Điều khoản và Điều kiện sử dụng đã đề ra.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ đối tác thứ ba nào nếu không được chúng tôi cho phép bằng văn bản.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trang web này chỉ dùng để cung cấp thông tin sản phẩm chứ chúng tôi không phải nhà sản xuất nên những nhận xét hiển thị trên web là ý kiến cá nhân của khách hàng, không phải của chúng tôi.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>2. Ý kiến khách hàng</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Tất cả nội dung trang web và ý kiến phê bình của quý khách đều là tài sản của chúng tôi. Nếu chúng tôi phát hiện bất kỳ thông tin giả mạo nào, chúng tôi sẽ khóa tài khoản của quý khách ngay lập tức hoặc áp dụng các biện pháp khác theo quy định của pháp luật ViệtNam.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong>3 &nbsp;Đặt hàng và xác nhận đơn hàng</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Khi quý khách đặt hàng tại <strong>GoGoGreen</strong>, chúng tôi sẽ nhận được yêu cầu đặt hàng và gửi đến quý khách mã số đơn hàng. Tuy nhiên, yêu cầu đặt hàng cần thông qua một bước xác nhận đơn hàng, <strong>GoGoGreen</strong> chỉ xác nhận đơn hàng nếu yêu cầu đặt hàng của quý khách thỏa mãn các tiêu chí thực hiện đơn hàng tại <strong>GoGoGreen</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Để yêu cầu đặt hàng được xác nhận nhanh chóng, quý khách vui lòng cung cấp đúng và đầy đủ các thông tin liên quan đến việc giao nhận, hoặc các điều khoản và điều kiện của chương trình khuyến mãi (nếu có) mà quý khách tham gia.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>4. Giá trị đơn hàng và hình thức thanh toán</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> cung cấp các hình thức thanh toán: tiền mặt khi nhận hàng, thẻ Thanh toán Quốc tế hoặc thẻ Thanh toán Nội địa.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trừ một số trường hợp có ghi chú riêng, thông thường quý khách có thể lựa chọn một trong 3 hình thức thanh toán trên khi tiến hành đặt hàng.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>5. Chương trình khuyến mãi</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Với mong muốn mang lại nhiều lợi ích cho khách hàng, <strong>GoGoGreen</strong> thường xuyên có các chương trình giảm giá đặc biệt. Tuy nhiên, để đảm bảo tính công bằng cho khách hàng là người tiêu dùng cuối cùng của <strong>GoGoGreen</strong>, chúng tôi có quyền từ chối các đơn hàng không nhằm mục đích sử dụng cho cá nhân, mua hàng số lượng nhiều hoặc với mục đích mua đi bán lại khi quý khách tham gia các chương trình khuyến mãi.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Thông thường, số lượng sản phẩm tối đa dành cho mỗi khách hàng khi tham gia chương trình khuyến mãi là không quy định. Thể lệ của chương trình khuyến mãi sẽ được cập nhật tại trang khuyến mãi theo từng thời điểm chạy chương trình và có thể được thay đổi mà không cần thông báo trước cho khách hàng.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> có quyền từ chối các đơn hàng không thỏa mãn điều khoản và điều kiện tham gia các chương trình khuyến mãi mà không cần thông báo đến khách hàng. Vì vậy, xin quý khách vui lòng tham khảo kỹ Thể lệ, quy định của từng chương trình khuyến mãi trước khi tham gia.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>6. Mã giảm giá</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Mã giảm giá là hình thức chiết khấu mà chúng tôi dành cho khách hàng có thể có giá trị giảm một phần hoặc toàn phần giá trị của đơn hàng.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Mỗi đơn hàng chỉ có thể áp dụng 1 mã giảm giá, quý khách sẽ nhận được thông tin chi tiết về điều khoản và điều kiện sử dụng mã giảm giá kèm theo. Để đảm bảo tính công bằng cho khách hàng là người tiêu dùng cuối cùng của <strong>GoGoGreen</strong>, chúng tôi có quyền từ chối các đơn hàng không nhằm mục đích sử dụng cho cá nhân, mua hàng số lượng nhiều hoặc với mục đích mua đi bán lại.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> có quyền từ chối các đơn hàng sử dụng mã giảm giá không thỏa mãn điều khoản và điều kiện sử dụng mã giảm gía mà không cần thông báo trước. Mã giảm giá trong trường hợp này sẽ không được cấp lại. Ngoài ra, <strong>GoGoGreen</strong> có quyền từ chối việc gia hạn mã đã hết hạn sử dụng, mã không được sử dụng hết giá trị hoặc các trường hợp đơn phương ngừng thược hiện đơn hàng phát sinh từ phía quý khách.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>7. Khu vực giao hàng</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> giao hàng toàn quốc đối với các sản phẩm do chính <strong>GoGoGreen</strong> phân phối.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Đối với sản phẩm do các đơn vị Thương nhân thành viên phân phối, khu vực giao hàng có thể sẽ được giới hạn theo thông tin cập nhật tại trang sản phẩm. Trong một số trường hợp, mà khu vực giao hàng không được cập nhật kịp thời tại thời điểm quý khách đặt hàng, <strong>GoGoGreen</strong> sẽ liên hệ đến quý khách để thông báo chi tiết.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>8. Giá cả</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Giá cả sản phẩm được niêm yết tại <strong>GoGoGreen</strong> là giá bán cuối cùng chưa bao gồm thuế Giá trị gia tăng (VAT) + chưa tính phí vận chuyển. Giá cả của sản phẩm có thể thay đổi tùy thời điểm và chương trình khuyến mãi kèm theo. Phí vận chuyển hoặc Phí thực hiện đơn hàng sẽ được áp dụng thêm nếu có, và sẽ được thông báo rõ khi quý khách đặt hàng.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Mặc dù chúng tôi cố gắng tốt nhất để bảo đảm rằng tất cả các thông tin và giá hiển thị là chính xác đối với từng sản phẩm, đôi khi sẽ có một số trường hợp bị lỗi hoặc sai sót. Nếu chúng tôi phát hiện lỗi về giá của bất kỳ sản phẩm nào trong đơn hàng của quý khách, chúng tôi sẽ thông báo cho quý khách trong thời gian sớm nhất có thể và gửi đến quý khách lựa chọn để xác nhận lại đơn hàng với giá chính xác hoặc hủy đơn hàng.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>9. Thông tin sản phẩm</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> cung cấp thông tin chi tiết đối với từng sản phẩm mà chúng tôi đăng tải.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trong trường hợp sản phẩm quý khách nhận được không đúng như những gì <strong>GoGoGreen</strong> đã mô tả trong phần thông tin sản phẩm, quý khách vui lòng thông tin đến bộ phận Hỗ trợ khách hàng trong thời gian sớm nhất kể từ khi nhận hàng đồng thời đảm bảo sản phẩm trong tình trạng chưa qua sử dụng để được hỗ trợ đổi trả.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>10. Chính sách về hàng giả, hàng nhái, hàng không đúng chất lượng</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– <strong>GoGoGreen</strong> hướng đến việc cung cấp hàng hóa và chất lượng dịch vụ tốt nhất cho khách hàng qua các sản phẩm được đăng bán trên trang web của chúng và từ chối bán các sản phẩm sản xuất trái phép, sao chép, hàng giả, hàng nhái, không rõ nguồn gốc xuất xứ…</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trong trường hợp quý khách có nghi ngờ sản phẩm sản xuất trái phép, sao chép, hàng giả, hàng nhái, không rõ nguồn gốc xuất xứ…, vui lòng thông báo ngay cho chúng tôi để được giải đáp.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>11. Thương hiệu và bản quyền</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của chúng tôi. Toàn bộ nội dung của trang web được bảo vệ bởi luật bản quyền của Việt Nam và các công ước quốc tế. Bản quyền đã được bảo lưu.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>12. Quyền pháp lý</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>13. Quy định về bảo mật</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>14. Thanh toán an toàn và tiện lợi</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Mọi khách hàng tham giao giao dịch tại <strong>GoGoGreen</strong> qua thẻ tín dụng quốc tế đều được bảo mật thông tin bằng mã hóa (xem chi tiết tại điều khoản “Quy định về bảo mật” được nêu ở trên). Qua đó, khi thực hiện thanh toán qua mạng quý khách lưu ý các chi tiết sau:</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Chỉ sử dụng trang web có chứng chỉ thanh toán an toàn.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Tuyệt đối không cho người khác mượn thẻ tín dụng hoặc tài khoản của mình để thực hiện thanh toán tại <strong>GoGoGreen</strong>; trong trường hợp phát sinh giao dịch ngoài ý muốn, quý khách vui lòng thông báo cho <strong>GoGoGreen</strong> biết để có thể hỗ trợ kịp thời.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Kiểm tra tài khoản ngân hàng của mình thường xuyên để đảm bảo tất cả giao dịch qua thẻ đều nằm trong tầm kiểm soát.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>15. Giao kết giao dịch</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Khách hàng khi mua sắm tại <strong>GoGoGreen</strong> phải thực hiện các thao tác đặt hàng và nhận hàng theo trình tự sau:</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Cách 1: Thanh toán trước online qua thẻ tín dụng (Visa, Master card..):</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 1: Khách hàng đặt hàng, cung cấp thông tin đầy đủ, xác thực</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 2: Khách hàng thanh toán trước;</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 3: <strong>GoGoGreen</strong> kiểm tra, xác nhận đơn hàng và chuyển hàng;</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 4: Khách hàng kiểm tra và nhận hàng;</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Cách 2: Thanh toán sau:</strong></span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 1: Khách hàng đặt hàng; cung cấp thông tin đầy đủ, xác thực</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 2: <strong>GoGoGreen</strong> xác thực đơn hàng;</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 3: <strong>GoGoGreen</strong> xác nhận thông tin khách hàng (điện thoại, tin nhắn, email);</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 4: <strong>GoGoGreen</strong> chuyển hàng;</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Bước 5: Khách hàng nhận hàng và thanh toán</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Cách 3 : Thanh toán trực tiếp khi mua hàng tại các showroom nếu có (bằng tiền mặt hoặc bằng thẻ).</strong></span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>16. Thay đổi, hủy bỏ giao dịch tại GoGoGreen</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trong mọi trường hợp, khách hàng đều có quyền chấm dứt giao dịch nếu đã thực hiện các biện pháp sau đây:</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">1. Thông báo cho <strong>GoGoGreen</strong> về việc hủy giao dịch qua đường dây nóng .</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">2. Trả lại hàng hoá đã nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi ích nào từ hàng hóa đó theo quy định của Chính sách đổi trả hàng .</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>17. Giải quyết hậu quả do lỗi nhập sai thông tin thương mại tại GoGoGreen</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Khách hàng có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại <strong>GoGoGreen</strong> Trong trường hợp khách hàng nhập sai thông tin gửi vào trang thông tin điện tử bán hàng, chúng tôi&nbsp;có quyền từ chối thực hiện giao dịch. Ngoài ra, trong mọi trường hợp, khách hàng đều có quyền đơn phương chấm dứt giao dịch nếu đã thực hiện các biện pháp sau đây:</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">1. Thông báo cho chúng tôi qua đường dây nóng .</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">2. Trả lại hàng hoá đã nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi ích nào từ hàng hóa đó.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>18. Giải quyết tranh chấp</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Bất kỳ tranh cãi, khiếu nại hoặc tranh chấp phát sinh từ hoặc liên quan đến giao dịch tại <strong>GoGoGreen</strong> hoặc các Quy định và Điều kiện này đều sẽ được giải quyết bằng hình thức thương lượng, hòa giải, trọng tài và/hoặc Tòa án theo Luật bảo vệ Người tiêu dùng Chương 4 về Giải quyết tranh chấp giữa người tiêu dùng và tổ chức, cá nhân kinh doanh hàng hóa, dịch vụ.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>19. Quy định chấm dứt thỏa thuận</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Trong trường hợp có bất kỳ thiệt hại nào phát sinh do việc vi phạm Quy Định sử dụng trang web, chúng tôi có quyền đình chỉ hoặc khóa tài khoản của quý khách vĩnh viễn. Nếu quý khách không hài lòng với trang web hoặc bất kỳ điều khoản, điều kiện, quy tắc, chính sách, hướng dẫn, hoặc cách thức vận hành của <strong>GoGoGreen</strong> thì biện pháp khắc phục duy nhất là ngưng làm việc với chúng tôi.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>20. Những quy định khác</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Tất cả các Điều Khoản và Điều Kiện (và tất cả nghĩa vụ phát sinh ngoài Điều khoản và Điều kiện này hoặc có liên quan) sẽ bị chi phối và được hiểu theo luật pháp Việt Nam. Chúng tôi có quyền sửa đổi các Điều khoản và Điều kiện này vào bất kỳ thời điểm nào và các sửa đổi đó sẽ có hiệu lực ngay tại thời điểm được được đăng tải tại <strong>GoGoGreen</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Xin quý khách lưu ý chỉ mua hàng khi chấp nhận và hiểu rõ những quy định trên. Nếu cần hỗ trợ thêm thông tin, quý khách vui lòng tham khảo bộ phận chăm sóc khách hàng.</span></p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
        // Page::insert([
        //     'title' => 'Chính sách đổi trả hàng',
        //     'content' => '<span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Làm thế nào để đổi trả hàng?</strong></span><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Trước khi gửi lại một sản phẩm cho Gogogreen để đổi trả hàng, quý khách vui lòng tham khảo Chính sách đổi trả hàng của chúng tôi nhằm đảm bảo sản phẩm này có đủ điều kiện để hoàn trả.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Nếu sản phẩm của quý khách đáp ứng tất cả các yêu cầu về đổi trả hàng, việc đổi trả sẽ được xử lý nhanh hơn.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">1. Liên hệ trực tiếp tới bộ phận chăm sóc khách theo số điện thoại ghi trên hóa đơn bán hàng để thông báo đổi trả hàng.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">2. Quý khách cũng có thể gửi email, tin nhắn SMS, zalo, thông qua website để đổi trả hàng.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong>Lưu ý :</strong>&nbsp;Quý khách nên chụp ảnh sản phẩm trước khi đổi trả hàng, việc lưu giữ hình ảnh trong các trường hợp này cũng sẽ góp phần giải quyết tốt hơn các vấn đề phát sinh trong quá trình đổi trả.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Ngoài ra, quý khách vui lòng thông báo cho Gogogreen trong vòng 48 giờ từ lúc nhận hàng nếu sản phẩm nhận được không nguyên vẹn, móp, trầy xước, bể vỡ, hàng cũ/ đã qua sử dụng hoặc thiếu các linh kiện cần thiết.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Để được hướng dẫn chi tiết các thao tác thực hiện, quý khách vui lòng tham khảo tại đây . Ngoài ra, quý khách có thể liên hệ bộ phận Chăm sóc khách hàng , Gogogreen hân hạnh phục vụ quý khách.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Quy trình kiểm tra tình trạng hàng đã đổi trả?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Sau khi sản phẩm của quý khách được gửi về đến kho, chúng tôi sẽ tiến hành kiểm tra đánh giá chất lượng sản phẩm và thời gian để hoàn tất quy trình này cần 3-5 ngày làm việc. Ngay sau khi có kết quả kiểm tra, chúng tôi sẽ gửi thông báo đến quý khách qua điện thoại, tin nhắn hoặc email.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Sau bao lâu Khách hàng có thể nhận được kết quả đổi trả hàng của chúng tôi?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Quy trình đánh giá chất lượng sản phẩm này có thể cần khoảng 5 ngày làm việc tính từ thời điểm Gogogreen nhận được sản phẩm gửi trả tại kho. Sau đó quý khách sẽ nhận được điện thoại thông báo kết quả kiểm tra đánh giá sản phẩm.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Việc gửi sản phẩm thay thế hoặc hoàn tiền chỉ được bắt đầu sau khi Gogogreen đã nhận đầy đủ thông tin xác nhận từ khách hàng.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Chi phí vận chuyển cho sản phẩm đổi trả?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Toàn bộ chi phí vận chuyển sẽ do khách hàng chi trả nếu lỗi xảy ra nằm ở phía Khách hàng và ngược lại.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Sau khi tôi thực hiện yêu cầu đổi trả hàng qua điện thoại sẽ có người đến tận nhà nhận lại hàng của tôi phải không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Việc quý khách thực hiện yêu cầu đổi trả hàng qua điện thoại chỉ là bước Gogogreen ghi nhận lại thông tin về sản phẩm quý khách muốn đổi trả và hướng xử lý mong muốn. Quý khách vẫn cần phải đóng gói và gửi sản phẩm về Gogogreen để được hỗ trợ xử lý các bước tiếp theo.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
        // Page::insert([
        //     'title' => 'Phương thức vận chuyển',
        //     'content' => '<p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>CHÍNH SÁCH GIAO HÀNG và CƯỚC PHÍ VẬN CHUYỂN:&nbsp;</strong></span></p><p><img src="http://gogogreen.com/storage/uploads/policies/phuong-thuc-van-chuyen_grande.webp" data-mce-src="http://gogogreen.com/storage/uploads/policies/phuong-thuc-van-chuyen_grande.jpg"></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>1. Chính sách giao hàng:</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Các đơn hàng trong ngày được tính từ 0h-17h, các đơn hàng sau 17h được tính vào đơn hàng ngày hôm sau.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>– Giao hàng miễn phí:</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Khách hàng trong vòng bán kính 3 km xung quanh cơ sở công ty tại</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Cơ sở : 86/20 Trịnh Đình Trọng, P. Phú Trung, Q. Tân Phú, TP. HCM.</span><br><br></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Giao hàng mất phí:</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Khách hàng ngoài bán kính 3 km xung quanh cơ sở công ty tại<strong>&nbsp;</strong>:</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">– Cơ sở : 86/20 Trịnh Đình Trọng, P. Phú Trung, Q. Tân Phú, TP. HCM.</span><br></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;">Quy trình đóng hàng.</span><br></strong></span></p><div><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><img src="http://trungthaosamnhung.com/DATA/admin/huong-dan-mua-hang/Dong-goi-san-pham.jpg" alt="" data-mce-src="http://trungthaosamnhung.com/DATA/admin/huong-dan-mua-hang/Dong-goi-san-pham.jpg" width="1110" height="507"></span></div><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Thời gian giao hàng.</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Khách hàng tại các tỉnh, thành phố khác và các vùng ngoại thành tùy vào địa chỉ cụ thể sẽ nhận hàng trong vòng 48h-72h sau khi đặt hàng hoặc theo các chính sách cảu các dối tác vận chuyển của chúng tôi.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"></span></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><img class="size-full wp-image-12948 aligncenter" src="http://nhathuocvietphap.vn/wp-content/uploads/2013/01/huong-dan-mua-hang-4.jpg" alt="huong-dan-mua-hang-4" width="556" height="472" data-mce-src="http://nhathuocvietphap.vn/wp-content/uploads/2013/01/huong-dan-mua-hang-4.jpg"></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">&nbsp;</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>IV. Bảng Giá Cước Sản Phẩm &amp; Khu Vực Áp Dụng Cước Vận Chuyển&nbsp;</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><img class="size-full wp-image-12949 aligncenter" src="http://nhathuocvietphap.vn/wp-content/uploads/2013/01/huong-dan-mua-hang-5.jpg" alt="giá cước vận chuyển" width="697" height="874" data-mce-src="http://nhathuocvietphap.vn/wp-content/uploads/2013/01/huong-dan-mua-hang-5.jpg"></span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;">Lưu ý : Giá cước trên chỉ mang tính minh họa, giá có thể thay đổi phụ thuộc vào đối tác là nhà vận chuyển chuyên nghiệp của cửa hàng.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Làm thế nào để kiểm tra thời gian giao hàng của một sản phẩm?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Khi đặt hàng, nhân viên bán hàng sẽ trả lời quý khách về thời gian ước tính giao hàng với từng khu vực địa lý.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi có thể tự chọn ngày giao hàng cho đơn hàng của tôi được không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Thời gian và địa điểm giao hàng hoàn toàn theo yêu cầu của quý khách</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi đang rất cần sản phẩm, Gogogreen có thể giao gấp cho tôi được không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Gogogreen sẽ đáp ứng mọi yêu cầu giao hàng của quý khách về thời gian và địa điểm.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi vừa nhận được điện thoại xác nhận sản phẩm trong đơn hàng đã được chuyển cho đơn vị vận chuyển. Vậy khi nào tôi nhận được hàng?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Thời gian giao hàng sau khi đơn hàng đã chuyển cho đơn vị vận chuyển sẽ tùy vào địa chỉ nhận hàng của quý khách:</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Trong khu vực TPHCM: 1-2 ngày làm việc</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Ngoài khu vực TPHCM: 3-4 ngày làm việc</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Làm sao để tôi biết được chính xác khi nào tôi nhận được hàng?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Trước khi giao hàng, đơn vị vận chuyển sẽ liên hệ với quý khách để hẹn ngày và thời gian giao hàng</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tại sao đơn hàng tôi đặt lại được giao thành nhiều kiện khác nhau?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Chúng tôi sẽ tách đơn hàng của quý khách thành nhiều kiện hàng khác nhau trong các trường hợp sau đây:</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Sản phẩm to quá khổ: 1 số sản phẩm không thể vận chuyển trong 1 thùng hàng vì quá to</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Các sản phẩm trong đơn hàng thuộc các nhãn hiệu khác nhau</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Tuy nhiên, quý khách có thể yên tâm là tiền phí vận chuyển (nếu có) chỉ tính 1 lần như đã xác nhận với quý khách</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi có thể hủy đơn hàng sau khi đơn hàng đã được chuyển cho đơn vị vận chuyển không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Chúng tôi sẽ hỗ trợ quý khách hủy đơn hàng tại bất kỳ thời điểm nào trước thời điểm quý khách đã nhận hàng</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Nếu tôi đi vắng lúc Gogogreen giao hàng đến thì làm thế nào?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Quý khách có thể nhờ người khác nhận và thanh toán hàng giúp.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Quý khách cũng có thể thông báo cho chúng tôi việc thay đổi về người nhận hàng cho chúng tôi qua điện thoại ngay sau khi đặt hàng.&nbsp;</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Có khu vực hạn chế nào mà Gogogreen không nhận giao hàng đến không?</strong></span></p><p><span color="#0000ff" data-mce-style="color: #0000ff;" style="color: #0000ff;"><span style="" data-mce-style="color: #0000ff;"></span>Theo chính sách của các nhà vận chuyển (khách hàng có thể tham khảo chính sách vận chuyển của Viettel Post)</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Gogogreen có giao hàng đi nước ngoài không?</strong></span><br><span color="#0000ff" data-mce-style="color: #0000ff;" style="color: #0000ff;">Chúng tôi sẽ trả lời cụ thể sau khi đã xác nhận với đối tác của chúng tôi khi có địa điểm cụ thể tại nước ngoài.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Gogogreen có giao hàng đến địa chỉ làm việc của tôi không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Gogogreen sẽ giao hàng đến địa chỉ quý khách đã đăng ký, không phân biệt đó là địa chỉ nhà riệng hay địa chỉ văn phòng làm việc.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Trường hợp quý khách muốn thay đổi địa chỉ giao hàng sau khi đã đặt đơn hàng, xin vui lòng gửi lại thông tin địa chỉ để chúng tôi có thể hỗ trợ đổi địa chỉ và thông báo đến quý khách sau khi hoàn tất.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi có thể đến văn phòng của Gogogreen để nhận hàng không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Quý khách có thể đến cơ sở tại 86/20 Trịnh Đình Trọng, Phú Trung, Tân Phú, HCM để nhận hàng.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Trường hợp nào nằm ngoài phạm vi cam kết của on plaza về việc không giao hàng đúng hẹn?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Các trường hợp sau đây nằm ngoài phạm vị cam kết của Gogogreen về việc không giao hàng đúng hẹn:</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Quý khách không cung cấp chính xác, đầy đủ địa chỉ giao hàng và thông tin liên lạc trong quá trình đặt hàng (phần “Thông tin Giao hàng”)</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Gogogreen nhiều lần liên hệ quý khách qua điện thoại, email nhưng không nhận được phản hồi</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Thời gian giao đến địa chỉ giao hàng đã được ấn định trước với quý khách nhưng quý khách không sẵn sàng để nhận hàng</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Gogogreen &nbsp;đã giao hàng đúng hẹn theo “Thông tin Giao hàng” nhưng quý khách để nhân viên Gogogreen &nbsp;chờ quá 10 phút để nhận hàng và mọi nỗ lực của Gogogreen nhằm liên hệ với quý khách đều không thành công.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">• Những trường hợp bất khả kháng như thiên tai (bao gồm động đất, gió xoáy, tai nạn giao thông,…), hoặc trường hợp gián đoạn mạng lưới giao thông trên quy mô toàn quốc hay quy mô địa phương và những trục trặc cơ học xảy ra cho các phương tiện vận chuyển hay máy móc.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi có được kiểm tra hàng trước khi thanh toán không?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"></span><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><strong></strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Trước khi chấp nhận và thanh toán cho một đơn hàng, khách hàng của Gogogreen có quyền yêu cầu được mở thùng hàng để kiểm tra hàng hóa bên trong có đúng với thông tin đặt hàng hay không, bao gồm: số lượng, chủng loại, màu sắc, hình thức, tính nguyên vẹn của hàng hóa.</span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Các bước kiểm tra sâu hơn như sử dụng thử sản phẩm có thể được tiến hành sau khi quý khách đã thanh toán cho đơn hàng.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;">LƯU Ý: Không áp dụng với các sản phẩm được niêm phong bởi nhà sản xuất, có tem niêm phong.</span></p><p><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Tôi phải làm gì khi yêu cầu đồng kiểm không được chấp nhận?</strong></span></p><p><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Quý khách có quyền từ chối nhận hàng và hãy liên lạc ngay với bộ phận Chăm sóc khách hàng của chúng tôi để được hỗ trợ kịp thời.</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Làm thế nào để tôi biết sản phẩm có chính sách giao hàng riêng?</span><br><span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">Tất cả những sản phẩm có giới hạn về khu vực giao hàng đều có nhãn thông báo “Chỉ giao hàng tại …” và thông tin lưu ý được ghi chú rõ trong phần chi tiết sản phẩm.</span></p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        Page::insert([
            'title' => 'Sâm núi Hàn Quốc',
            'content' => '<section class="section single-brand" id="section_71354343" style="user-select: auto;">
            <div class="bg section-bg fill bg-fill bg-loaded" style="user-select: auto;">





            </div>

            <div class="section-content relative" style="user-select: auto;">


        <div id="text-3825527474" class="text title-heading" style="user-select: auto;">


    <h1 data-animate="fadeInUp" data-animated="true" style="user-select: auto;">ĐẶC ĐIỂM TỰ NHIÊN CỦA CÂY SÂM NÚI</h1>
                </div>

    <div class="row row-collapse" id="row-2004838275" style="user-select: auto;">


        <div id="col-740072857" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2250766663" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Sâm núi theo tiêu chuẩn quốc gia Hàn Quốc</p>
                </div>


            </div>
                </div>



        <div id="col-1882208080" class="col small-12 large-12" data-animate="bounceInUp" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2579040077" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;">Trồng và khai thác trong điều kiện sinh thái tự nhiên (vùng núi cao, rừng rậm), đảm bảo tính tự nhiên và tinh khiết.</li>
    <li style="user-select: auto;">Không sử dụng các thiết bị nhân tạo như tấm chắn nắng, chắn sáng bảo vệ.</li>
    <li style="user-select: auto;">Không sử dụng phân bón và các nông dược.</li>
    <li style="user-select: auto;">Chỉ được thu hoạch sau khoảng thời gian từ 7 đến 20 năm.</li>
    </ul>
                </div>


            </div>
                </div>



    </div>
    <div class="row row-collapse align-middle" id="row-303315895" style="user-select: auto;">


        <div id="col-793825597" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-256255142" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Cấu tạo cây sâm núi</p>
                </div>


            </div>
                </div>



        <div id="col-144674167" class="col small-12 large-12" data-animate="flipInX" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_460613661" style="user-select: auto;">
            <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/korea_sam.jpg" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
                <img width="1000" height="667" src="images/introductions/korea_sam.jpg" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/korea_sam.jpg 1000w, images/introductions/korea_sam-600x400.jpg 600w, images/introductions/korea_sam-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" style="user-select: auto;">
                        </div>
                            </a>
    <style style="user-select: auto;">
    #image_460613661 {
      width: 100%;
    }
    </style>
        </div>



            </div>

    <style style="user-select: auto;">
    #col-144674167 > .col-inner {
      padding: 0px 21px 0px 21px;
    }
    </style>
        </div>



        <div id="col-1973500355" class="col small-12 large-12" data-animate="bounceInDown" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-655538216" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;"><strong style="user-select: auto;">Hoa</strong>: khi sâm được 3 năm tuổi mới bắt đầu có hoa và hàng năm nở rộ vào tầm từ giữa tháng 4 đến cuối tháng 5.</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Lá: </strong>cây sâm hơn 1 năm thường mới có 3 lá, hơn 2 năm có 5 lá mọc dạng xòe như bàn tay 5 ngón.</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Thân</strong>: phần nối giữa củ và lá, mỗi năm mọc thẳng hoặc mọc chéo.</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Đầu (não sâm)</strong><strong style="user-select: auto;">: </strong>Lá sâm sau khi rụng vào mùa thu hàng năm để lại những mấu hình móng ngựa ở phần đầu củ sâm. Dựa vào phần não để tính tuổi của cây sâm. Sâm càng lâu năm, số mấu càng nhiều và dài. Chất lượng cây sâm phụ thuộc rất nhiều vào phần não. Cây sâm sẽ khó thể hiện chất lượng nếu bị rụng đầu.</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Củ (rễ chính)</strong><strong style="user-select: auto;">: </strong>Mảnh mai và dài hơn nhiều so với sâm trồng ruộng củ to. Nếp nhăn (đường vân) trên rễ chính làm căn cứ tính tuổi cây sâm.</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Rễ</strong><strong style="user-select: auto;">: </strong>Mỏng, rất cứng và dai. Vị ngọt và đắng nhưng rất tốt và bổ. Rễ là nơi chứa nhiều saponin nhất trên cây sâm, đặc biệt trong rễ mịn (tằm).</li>
    </ul>
                </div>


            </div>
                </div>



    </div>
    <div class="row row-collapse align-middle" id="row-2019465267" style="user-select: auto;">


        <div id="col-821892635" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-65197971" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Đặc điểm nhận biết</p>
                </div>


            </div>
                </div>



        <div id="col-1806960296" class="col small-12 large-12" data-animate="bounceInRight" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2157012168" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;">Môi trường sinh thái càng tốt thì càng ra nhiều hoa.</li>
    <li style="user-select: auto;">Lá có hình dạng giống bàn tay người.</li>
    <li style="user-select: auto;">Trên thân củ có nhiều ngấn.</li>
    <li style="user-select: auto;">Rễ sâm chứa nhiều chất dinh dưỡng.</li>
    <li style="user-select: auto;">Tuổi sâm được ghi dấu lại bằng những mấu ở đầu sâm.</li>
    </ul>
                </div>


            </div>
                </div>



    </div>
    <div class="row row-collapse align-middle" id="row-555641772" style="user-select: auto;">


        <div id="col-745955703" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2433970752" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Hình dáng cây sâm núi qua các giai đoạn sinh trưởng</p>
                </div>

        <div id="text-2147592426" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;">Sâm núi được trồng trên địa hình đồi núi, trong điều kiện sinh thái hoàn toàn tự nhiên nên so với sâm ruộng thì quá trình sinh trưởng rất chậm và nhiều khi bị ngừng sinh trưởng.</li>
    <li style="user-select: auto;">Do vậy, tùy vào từng địa hình, phương pháp, điều kiện thổ nhưỡng vùng canh tác và năm tuổi mà cây sâm núi có hình dáng kích thước rất đa dạng. Mời các bạn tham khảo những tấm ảnh về độ tuổi cây sâm núi dưới đây.</li>
    </ul>
                </div>


            </div>
                </div>



        <div id="col-1553464517" class="col small-12 large-12" data-animate="bounceInRight" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">





        <div class="row large-columns-4 medium-columns-3 small-columns-2" style="user-select: auto;">
              <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year01.jpg" title="1 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year01.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year01.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year01-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year01-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">1 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year02.jpg" title="2 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year02.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year02.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year02-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year02-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">2 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year03.jpg" title="3 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year03.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year03.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year03-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year03-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">3 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year04.jpg" title="4 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year04.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year04.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year04-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year04-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">4 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year05.jpg" title="5 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year05.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year05.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year05-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year05-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">5 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year06.jpg" title="6 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year06.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year06.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year06-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year06-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">6 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year07.jpg" title="7 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year07.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year07.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year07-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year07-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">7 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year08.jpg" title="8 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year08.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year08.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year08-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year08-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">8 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year09.jpg" title="9 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year09.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year09.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year09-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year09-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">9 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year10.jpg" title="10 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year10.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year10.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year10-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year10-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">10 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year15.jpg" title="15 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year15.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year15.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year15-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year15-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">15 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year20.jpg" title="20 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year20.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year20.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year20-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year20-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">20 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
                     <div class="gallery-col col" style="user-select: auto;">
              <div class="col-inner" style="user-select: auto;">
                <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2020/12/year25.jpg" title="25 năm tuổi" style="user-select: auto;">            <div class="box has-hover gallery-box box-bounce" style="user-select: auto;">
                  <div class="box-image" style="user-select: auto;">
                    <img width="1000" height="667" src="https://lasham.vn/wp-content/uploads/2020/12/year25.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="760,761,762,763,764,765,766,767,768,769,770,771,772" style="user-select: auto;" lightbox_image_size="large" image_size="original" text_align="center" text_size="large" srcset="https://lasham.vn/wp-content/uploads/2020/12/year25.jpg 1000w, https://lasham.vn/wp-content/uploads/2020/12/year25-600x400.jpg 600w, https://lasham.vn/wp-content/uploads/2020/12/year25-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">                                                              </div>
                  <div class="box-text text-center is-large" style="user-select: auto;">
                     <p style="user-select: auto;">25 năm tuổi</p>
                  </div>
                </div>
                </a>          </div>
             </div>
             </div>


            </div>
                </div>



    </div>

            </div>


    <style style="user-select: auto;">
    #section_71354343 {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    </style>
        </section>
        <section class="section single-brand" id="section_1398716158" style="user-select: auto;">
            <div class="bg section-bg fill bg-fill bg-loaded" style="user-select: auto;">





            </div>

            <div class="section-content relative" style="user-select: auto;">


        <div id="text-1382120545" class="text title-heading" style="user-select: auto;">


    <h1 data-animate="fadeInUp" data-animated="true" style="user-select: auto;">Kiểm định chất lượng</h1>
                </div>

    <div class="row row-collapse align-middle" id="row-1468589569" style="user-select: auto;">


        <div id="col-985775726" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-418316776" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-1135940635" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-4218519121" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">01</h1>
    <h2 style="user-select: auto;">Kiểm nghiệm mẫu đất</h2>
    <p style="user-select: auto;">Không ô nhiễm, không dư lượng thuốc hóa học.</p>

    <style style="user-select: auto;">
    #text-4218519121 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-1135940635 {
      width: 80%;
    }
    #text-box-1135940635 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-418316776 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-418316776 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-985775726 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



        <div id="col-2072783573" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-1234244957" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-1626349693" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-3549947625" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">02</h1>
    <h2 style="user-select: auto;">Cấp phép nuôi trồng</h2>
    <p style="user-select: auto;">Cấp phép sau khi đạt kết
    quả xét nghiệm đất mẫu.</p>

    <style style="user-select: auto;">
    #text-3549947625 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-1626349693 {
      width: 80%;
    }
    #text-box-1626349693 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-1234244957 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-1234244957 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-2072783573 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



        <div id="col-1884381614" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-975948170" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-875734622" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-344013861" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">03</h1>
    <h2 style="user-select: auto;">Quá trình nuôi trồng</h2>
    <p style="user-select: auto;">Nhật ký nuôi trồng ghi lại
    toàn bộ quá trình chăm sóc.
    Tuyệt đối cấm phun thuốc
    và sử dụng phân hóa học.</p>

    <style style="user-select: auto;">
    #text-344013861 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-875734622 {
      width: 80%;
    }
    #text-box-875734622 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-975948170 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-975948170 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-1884381614 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



        <div id="col-76518315" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-815595865" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-339725984" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-539925954" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">04</h1>
    <h2 style="user-select: auto;">Kiểm định chất lượng</h2>
    <p style="user-select: auto;">Kiểm tra dư lượng thuốc
    trước khi cho phép thu
    hoạch sản phẩm.</p>

    <style style="user-select: auto;">
    #text-539925954 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-339725984 {
      width: 80%;
    }
    #text-box-339725984 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-815595865 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-815595865 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-76518315 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



        <div id="col-703404122" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-1708553563" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-346095427" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-2507919778" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">05</h1>
    <h2 style="user-select: auto;">Cấp tem
    kiểm định chất lượng</h2>
    <p style="user-select: auto;">Về nguồn gốc sản phẩm,
    kết quả kiểm định chất
    lượng sản phẩm.</p>

    <style style="user-select: auto;">
    #text-2507919778 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-346095427 {
      width: 80%;
    }
    #text-box-346095427 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-1708553563 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-1708553563 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-703404122 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



        <div id="col-1970474989" class="col medium-4 small-12 large-4" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">




      <div class="banner has-hover" id="banner-1476887543" style="user-select: auto;">
              <div class="banner-inner fill" style="user-select: auto;">
            <div class="banner-bg fill" style="user-select: auto;">
                <div class="bg fill bg-fill bg-loaded" style="user-select: auto;"></div>

                        </div>
            <div class="banner-layers container" style="user-select: auto;">
                <div class="fill banner-link" style="user-select: auto;"></div>

       <div id="text-box-1903904716" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text" style="user-select: auto;">
                                    <div class="text dark" style="user-select: auto;">

                  <div class="text-inner text-center" style="user-select: auto;">


        <div id="text-2054903014" class="text box-step-kiemdinh" style="user-select: auto;">


    <h1 style="user-select: auto;">06</h1>
    <h2 style="user-select: auto;">Công khai thông tin</h2>
    <p style="user-select: auto;">Về đơn vị sản xuất và phiếu
    kiểm định chất lượng với
    người tiêu dùng.</p>

    <style style="user-select: auto;">
    #text-2054903014 {
      font-size: 1rem;
      text-align: center;
    }
    </style>
        </div>


                  </div>
               </div>

    <style style="user-select: auto;">
    #text-box-1903904716 {
      width: 80%;
    }
    #text-box-1903904716 .text {
      font-size: 100%;
    }
    </style>
        </div>


            </div>
          </div>

                  <div class="height-fix is-invisible" style="user-select: auto;"><img width="489" height="490" src="images/introductions/bg.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/introductions/bg.png 489w, images/introductions/bg-399x400.png 399w, images/introductions/bg-280x280.png 280w, images/introductions/bg-300x300.png 300w, images/introductions/bg-100x100.png 100w" sizes="(max-width: 489px) 100vw, 489px" style="user-select: auto;"></div>

    <style style="user-select: auto;">
    #banner-1476887543 .bg.bg-loaded {
      background-image: url(images/introductions/bg.png);
    }
    #banner-1476887543 {
      background-color: rgb(255, 255, 255);
    }
    </style>
      </div>



            </div>

    <style style="user-select: auto;">
    #col-1970474989 > .col-inner {
      padding: 20px 20px 20px 20px;
    }
    </style>
        </div>



    </div>

            </div>


    <style style="user-select: auto;">
    #section_1398716158 {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    </style>
        </section>
        <section class="section single-brand" id="section_1712279383" style="user-select: auto;">
            <div class="bg section-bg fill bg-fill bg-loaded" style="user-select: auto;">





            </div>

            <div class="section-content relative" style="user-select: auto;">


        <div id="text-3980597352" class="text title-heading" style="user-select: auto;">


    <h1 data-animate="fadeInUp" data-animated="true" style="user-select: auto;">CÔNG DỤNG CỦA CÂY SÂM NÚI</h1>
                </div>

    <div class="row row-collapse align-middle" id="row-1833053207" style="user-select: auto;">


        <div id="col-1047050713" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2712362411" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Theo y học cổ truyền</p>
                </div>


            </div>
                </div>



        <div id="col-896400454" class="col small-12 large-12" data-animate="bounceIn" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-2746768365" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;">Vị cam vi hàn: vị ngọt, tính mát</li>
    <li style="user-select: auto;">Chủ bổ ngũ tạng: bảo vệ ngũ tạng</li>
    <li style="user-select: auto;">An tinh thân: An tâm (tinh thần an lạc)</li>
    <li style="user-select: auto;">Chỉnh hồn phách: định thần (ổn định tinh thần)</li>
    <li style="user-select: auto;">Chỉ kinh quí: làm tiêu tan sơ hãi</li>
    <li style="user-select: auto;">Trừ tà khí: loại bỏ tà khí khỏi cơ thể</li>
    <li style="user-select: auto;">Minh mục: làm cho mắt sáng lên</li>
    <li style="user-select: auto;">Khai tâm: giúp nhẹ lòng</li>
    <li style="user-select: auto;">Ích trí: bồi bổ tăng cường trí tuệ</li>
    <li style="user-select: auto;">Cửu phúc khinh thân diên niên (nội tâm bền bỉ cơ thể nhẹ nhàng kéo dài tuổi thọ)</li>
    </ul>
                </div>


            </div>
                </div>



    </div>
    <div class="row row-collapse align-middle" id="row-1833857097" style="user-select: auto;">


        <div id="col-273575369" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-1891620911" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">Theo y học hiện đại</p>
                </div>

        <div id="text-3777391921" class="text" style="user-select: auto;">


    <p style="user-select: auto;">Trong các nghiên cứu khoa học gần đây đã chỉ ra rằng trong Sâm núi chứa rất nhiều thành phần Saponin có hiệu quả dược lý cao. Các thành phần hoạt tính sinh học như Ginsenosides Rb1, Rc, Re, Rg1 có trong Saponin có tác dụng đặc biệt trong việc phòng bệnh, chữa bệnh cải thiện sức khỏe con người. (Nguồn: <span data-text-color="success" style="user-select: auto;">KOFPI</span>)</p>

    <style style="user-select: auto;">
    #text-3777391921 {
      font-size: 1.25rem;
    }
    </style>
        </div>


            </div>
                </div>



        <div id="col-1623993220" class="col small-12 large-12" data-animate="fadeInDown" data-animated="true" style="user-select: auto;">
            <div class="col-inner text-center" style="user-select: auto;">



        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1077363466" style="user-select: auto;">
            <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/so-sanh-1-1.png" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
                <img width="1223" height="654" src="images/introductions/so-sanh-1-1.png" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/so-sanh-1-1.png 1223w, images/introductions/so-sanh-1-1-748x400.png 748w, images/introductions/so-sanh-1-1-768x411.png 768w, images/introductions/so-sanh-1-1-600x321.png 600w" sizes="(max-width: 1223px) 100vw, 1223px" style="user-select: auto;">
                        </div>
                            </a>
    <style style="user-select: auto;">
    #image_1077363466 {
      width: 100%;
    }
    </style>
        </div>


        <div id="text-1606578336" class="text" style="user-select: auto;">


    <p style="text-align: center; user-select: auto;"><strong style="user-select: auto;"><em style="user-select: auto;">Công dụng và hiệu quả của Ginsenosides
    </em></strong></p>

    <style style="user-select: auto;">
    #text-1606578336 {
      font-size: 1.25rem;
      color: rgb(118, 146, 93);
    }
    #text-1606578336 > * {
      color: rgb(118, 146, 93);
    }
    </style>
        </div>


            </div>
                </div>



        <div id="col-1656882137" class="col small-12 large-12" data-animate="blurIn" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1419538424" style="user-select: auto;">
            <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/bieu-do.png" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
                <img width="784" height="512" src="images/introductions/bieu-do.png" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/bieu-do.png 784w, images/introductions/bieu-do-613x400.png 613w, images/introductions/bieu-do-768x502.png 768w, images/introductions/bieu-do-600x392.png 600w" sizes="(max-width: 784px) 100vw, 784px" style="user-select: auto;">
                        </div>
                            </a>
    <style style="user-select: auto;">
    #image_1419538424 {
      width: 100%;
    }
    </style>
        </div>


        <div id="text-2401268651" class="text" style="user-select: auto;">


    <p style="text-align: center; user-select: auto;"><strong style="user-select: auto;"><em style="user-select: auto;">So sánh hàm lượng GINSENOSIDES có trong SÂM NÚI và SÂM RUỘNG</em></strong></p>

    <style style="user-select: auto;">
    #text-2401268651 {
      font-size: 1.25rem;
      color: rgb(118, 146, 93);
    }
    #text-2401268651 > * {
      color: rgb(118, 146, 93);
    }
    </style>
        </div>

        <div id="text-3797777892" class="text box-text" style="user-select: auto;">


    <h1 style="text-align: center; user-select: auto;"><span data-text-color="success" style="user-select: auto;"><strong style="user-select: auto;">Thông số để lập biểu đồ:</strong></span></h1>
    <ul style="user-select: auto;">
    <li style="user-select: auto;">Rb1: Sâm núi: 0.222, sâm ruộng: 0.087</li>
    <li style="user-select: auto;">Rb2+Rc: Sâm núi 0.031; sâm ruộng: 0.017</li>
    <li style="user-select: auto;">Rd: Sâm núi 0.216 ; sâm ruộng: 0.048</li>
    <li style="user-select: auto;">Re: Sâm núi 0.117; sâm ruộng: 0.0.054</li>
    <li style="user-select: auto;">Rf: Sâm núi 0.015; sâm ruộng: 0.014</li>
    <li style="user-select: auto;">Rg1: Sâm núi 0.021; sâm ruộng: 0.020</li>
    </ul>
                </div>


            </div>

    <style style="user-select: auto;">
    #col-1656882137 > .col-inner {
      margin: 41px 0px 0px 0px;
    }
    </style>
        </div>



    </div>
    <div class="row row-collapse align-middle" id="row-838685971" style="user-select: auto;">


        <div id="col-1645357572" class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-3867068436" class="text title-child" style="user-select: auto;">


    <p style="user-select: auto;">So sánh Sâm núi và Sâm ruộng</p>
                </div>

        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1354255991" style="user-select: auto;">
            <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/so-sanh-961x800.png" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
                <img width="1035" height="862" src="images/introductions/so-sanh.png" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/so-sanh.png 1035w, images/introductions/so-sanh-480x400.png 480w, images/introductions/so-sanh-961x800.png 961w, images/introductions/so-sanh-768x640.png 768w, images/introductions/so-sanh-600x500.png 600w" sizes="(max-width: 1035px) 100vw, 1035px" style="user-select: auto;">
                        </div>
                            </a>
    <style style="user-select: auto;">
    #image_1354255991 {
      width: 100%;
    }
    </style>
        </div>



            </div>
                </div>



    </div>

            </div>


    <style style="user-select: auto;">
    #section_1712279383 {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    </style>
        </section>
        <section class="section single-brand" id="section_1940910189" style="user-select: auto;">
            <div class="bg section-bg fill bg-fill bg-loaded" style="user-select: auto;">





            </div>

            <div class="section-content relative" style="user-select: auto;">


        <div id="text-3652371373" class="text title-heading" style="user-select: auto;">


    <h1 data-animate="fadeInRight" data-animated="true" style="user-select: auto;">Cách sử dụng toàn tính cây sâm núi</h1>
                </div>

    <div class="row row-collapse align-middle" id="row-1319108381" style="user-select: auto;">


        <div id="col-705791177" class="col small-12 large-12" data-animate="flipInY" data-animated="true" style="user-select: auto;">
            <div class="col-inner" style="user-select: auto;">



        <div id="text-3644142429" class="text box-text" style="user-select: auto;">


    <ul style="user-select: auto;">
    <li style="user-select: auto;"><strong style="user-select: auto;">Hoa (quả): </strong>Tươi – Ép lấy nước uống, Sấy khô: ăn giòn hoặc hãm trà</li>
    <li style="user-select: auto;"><strong style="user-select: auto;">Lá:</strong> Tươi – Xay sinh tố uống; Khô- hãm trà sâm, nấu ăn</li>
    <li style="user-select: auto;">Thân: <strong style="user-select: auto;">Sắc lấy nước uống </strong></li>
    <li style="user-select: auto;">Đầu (não): <strong style="user-select: auto;">Không nên ăn sống, Ngâm rượu, nấu ăn</strong></li>
    <li style="user-select: auto;">Củ (rễ): Ăn sống, xay sinh tố; Ngâm rượu, ngâm mật ong; Nấu ăn</li>
    </ul>
                </div>


            </div>
                </div>



    </div>

            </div>


    <style style="user-select: auto;">
    #section_1940910189 {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    </style>
        </section>
                <div class="clear" style="user-select: auto;"></div>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
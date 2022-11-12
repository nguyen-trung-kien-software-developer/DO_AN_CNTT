<?php

namespace Database\Seeders;

use App\Models\Consultant;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConsultantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consultant::insert([
            'fullname' => 'Nguyễn Thùy Trang',
            'email' => 'thuytrang@gmail.com',
            'mobile' => '0987643467',
            'product_type_name' => 'Sản Phẩm Làm Đẹp',
            'content' => 'Em đã mua hàng dầu thông của shop, sử dụng hiệu quả, lần sau hết em gọi shop giao em địa chỉ cũ',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Consultant::insert([
            'fullname' => 'Nguyễn Văn Hùng',
            'email' => 'hungnguyen@gmail.com',
            'mobile' => '0987643467',
            'product_type_name' => 'Sản Phẩm Sức Khỏe',
            'content' => 'Công ty mình hay đặt hàng các sản phẩm quà tặng sức khỏe như hồng sâm, đông trùng hạ thảo, yến sào tặng đối tác tại Thịnh Phát. Cửa hàng phục vụ rất tận tâm, hay có nhiều set quà tết, trung thu rất sang trọng, giá thành cũng hợp lý khi mua số lượng lớn. Mình sẽ đồng hành lâu dài cùng Sâm Yến Thịnh Phát. Cảm ơn!',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Consultant::insert([
            'fullname' => 'Phạm Thúy Hằng',
            'email' => 'hangpham@gmail.com',
            'mobile' => '0987643467',
            'product_type_name' => 'Sản Phẩm Tiện Ích',
            'content' => 'Thích nhất mua hàng bên shop vì hay được tặng quà. Quà tặng ở đây thì toàn loại xịn sò như nước sâm, kẹo sâm, cao dán sâm, tất cả đều chính hãng Hàn Quốc. Mỗi khi mua hàng tôi mang theo thẻ VIP do cửa hàng cấp nên được giảm tới 10% nên so ra vẫn tiết kiệm hơn mua ở những nơi khác.',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Consultant::insert([
            'fullname' => 'Nguyễn Mạnh Hưng',
            'email' => 'hungnguyen@gmail.com',
            'mobile' => '0987643467',
            'product_type_name' => 'Mẹ và bé',
            'content' => 'Công nhận dịch vụ giao hàng bên shop nhanh kinh khủng. Hôm đó 8 giờ tối, mình đặt 1 ký sâm tươi 6 củ/ kg giao ở Thủ Đức mà shop vẫn nhiệt tình giao luôn trong tối đó cho mình. Mặt dù lần đầu mua hàng đặt online nhưng shop chọn sâm rất đẹp, không có củ nào lỗi hay xấu, chất lượng thì đáng đồng tiền nên mình tin dùng được gần 1 năm rồi.',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Consultant::insert([
            'fullname' => 'Nguyễn Lâm Hưng',
            'email' => 'hungnguyenlam@gmail.com',
            'mobile' => '0987643467',
            'product_type_name' => 'Thời Trang',
            'content' => 'Thanks shop lắm nha, bữa qua tiệm mua quà biếu sếp mà quá trời sản phẩm nhìn không biết chọn loại nào luôn. Loay hoay 1 hồi được chị chủ tư vấn nhiệt tình, hỏi sếp mình tuổi tác sao có bệnh gì không để chọn quà cho phù hợp, tại sản phẩm sức khỏe nên phải kĩ 1 chút. Cuối cùng mình cũng chọn được quà cho sếp. Sếp dùng được 1 tuần thì có nhắn khen quá trời làm mình vui ghê luôn, hihi',
            'created_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
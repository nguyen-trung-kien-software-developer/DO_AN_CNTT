@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list">
                    <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a>
                    <a href="{{ route('site.blog.index') }}" class="fist_menu_cate_a">Thông tin hữu ích</a>
                    <a href="{{ route('site.blog.show', [$mainBlog->slug]) }}">{{ $mainBlog->title }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 clearfix">
            <div class="list_news_home_cate clearfix">
                <div class="left_detail_news">
                    <div class="title_loc_search">Tin mới</div>
                    @include('site.layout.lastestBlogs')
                </div>
                <div class="right_detail_news">
                    <div id="tut_detail" class="content_news">
                        <span id="element_action"></span>
                        <h1 class="h1_news_detail">{{ $mainBlog->title }}</h1>
                        <div id="block-artice-content" class="entry-content">
                            {!! $mainBlog->content !!}
                        </div>
                    </div>
                    <div class="clear"></div>

                    {{-- <div class="other_news">
                        <div class="other_title">Các tin khác</div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/ngay-gia-dinh-viet-nam-khi-suc-khoe-tro-thanh-tai-san-quy-gia-trong-doi-song-hien-dai-nhan-sam-thinh-phat.html"
                                title="Ngày gia đình Việt Nam - Khi sức khỏe trở thành tài sản quý giá trong đời sống hiện đại | Nhân sâm Thịnh Phát"><img
                                    class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-28/ngaygiadinhvietnamkhisuckhoetrothanhtaisanquygiatrongdoisonghientai00-8pz0hywvvedp-120x80.jpg"
                                    alt="Ngày gia đình Việt Nam - Khi sức khỏe trở thành tài sản quý giá trong đời sống hiện đại | Nhân sâm Thịnh Phát"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/ngay-gia-dinh-viet-nam-khi-suc-khoe-tro-thanh-tai-san-quy-gia-trong-doi-song-hien-dai-nhan-sam-thinh-phat.html"
                                    title="Ngày gia đình Việt Nam - Khi sức khỏe trở thành tài sản quý giá trong đời sống hiện đại | Nhân sâm Thịnh Phát">Ngày
                                    gia đình Việt Nam - Khi sức khỏe trở thành tài sản quý giá trong đời sống hiện đại |
                                    Nhân sâm Thịnh Phát</a>
                                <p>Nhân Ngày Gia Đình Việt Nam 28/6, mời bạn cùng Nhân sâm Thịnh Phát tìm hiểu những bí...
                                </p>
                            </span>
                        </div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/tuan-le-gia-dinh-den-thinh-phat-ai-cung-rung-rinh-qua.html"
                                title="Tuần lễ gia đình - “Đến Thịnh Phát” ai cũng rủng rỉnh quà"><img class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-25/tuanlegiadinhdenthinhphataicungrungrinhqua01-ctyvxbir92nt-120x80.jpg"
                                    alt="Tuần lễ gia đình - “Đến Thịnh Phát” ai cũng rủng rỉnh quà"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/tuan-le-gia-dinh-den-thinh-phat-ai-cung-rung-rinh-qua.html"
                                    title="Tuần lễ gia đình - “Đến Thịnh Phát” ai cũng rủng rỉnh quà">Tuần lễ gia đình -
                                    “Đến Thịnh Phát” ai cũng rủng rỉnh quà</a>
                                <p>Ngày gia đình Việt Nam 28/6 – Một ngày lễ nhằm tôn vinh mái ấm gia đình Việt. Đây...</p>
                            </span>
                        </div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/nhung-thoi-quen-ngay-nang-lam-da-mat-collagen-nhanh-chong-nhan-sam-thinh-phat.html"
                                title="Những thói quen ngày nắng làm da mất Collagen nhanh chóng | Nhân sâm Thịnh Phát"><img
                                    class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-23/nhungthoiquenhangngaylamdamatcollagennhanhchong00-zmqa7kuad4te-120x80.jpg"
                                    alt="Những thói quen ngày nắng làm da mất Collagen nhanh chóng | Nhân sâm Thịnh Phát"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/nhung-thoi-quen-ngay-nang-lam-da-mat-collagen-nhanh-chong-nhan-sam-thinh-phat.html"
                                    title="Những thói quen ngày nắng làm da mất Collagen nhanh chóng | Nhân sâm Thịnh Phát">Những
                                    thói quen ngày nắng làm da mất Collagen nhanh chóng | Nhân sâm Thịnh Phát</a>
                                <p>Để bảo vệ làn da luôn căng mịn, tươi sáng trong những ngày nắng nóng đỉnh điểm...</p>
                            </span>
                        </div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/4-loai-do-uong-giup-ho-tro-cai-thien-sa-sut-tri-tue-don-gian-nhung-hieu-qua-cao-nhan-sam-thinh-phat.html"
                                title="4 loại đồ uống giúp hỗ trợ cải thiện sa sút trí tuệ đơn giản nhưng hiệu quả cao | Nhân sâm Thịnh Phát"><img
                                    class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-21/4loaidouonggiuphotrocaithiensasuttrituedonggiannhunghieuquacao00-1j6isp5z3jv7-120x80.jpg"
                                    alt="4 loại đồ uống giúp hỗ trợ cải thiện sa sút trí tuệ đơn giản nhưng hiệu quả cao | Nhân sâm Thịnh Phát"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/4-loai-do-uong-giup-ho-tro-cai-thien-sa-sut-tri-tue-don-gian-nhung-hieu-qua-cao-nhan-sam-thinh-phat.html"
                                    title="4 loại đồ uống giúp hỗ trợ cải thiện sa sút trí tuệ đơn giản nhưng hiệu quả cao | Nhân sâm Thịnh Phát">4
                                    loại đồ uống giúp hỗ trợ cải thiện sa sút trí tuệ đơn giản nhưng hiệu quả cao | Nhân sâm
                                    Thịnh Phát</a>
                                <p>Lối sống đóng vai trò rất quan trọng trong việc hỗ trợ cải thiện bệnh sa sút trí...</p>
                            </span>
                        </div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/bi-quyet-bao-ve-co-hong-nang-cao-suc-khoe-duong-ho-hap-mua-nang-nong-nhan-sam-thinh-phat.html"
                                title="Bí quyết bảo vệ cổ họng, nâng cao sức khỏe đường hô hấp mùa nắng nóng | Nhân sâm Thịnh Phát"><img
                                    class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-18/biquyetbaovecohongnangcaosuckhoeduonghohapmuanangnong00-zcvohavmqegq-120x80.jpg"
                                    alt="Bí quyết bảo vệ cổ họng, nâng cao sức khỏe đường hô hấp mùa nắng nóng | Nhân sâm Thịnh Phát"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/bi-quyet-bao-ve-co-hong-nang-cao-suc-khoe-duong-ho-hap-mua-nang-nong-nhan-sam-thinh-phat.html"
                                    title="Bí quyết bảo vệ cổ họng, nâng cao sức khỏe đường hô hấp mùa nắng nóng | Nhân sâm Thịnh Phát">Bí
                                    quyết bảo vệ cổ họng, nâng cao sức khỏe đường hô hấp mùa nắng nóng | Nhân sâm Thịnh
                                    Phát</a>
                                <p>Vào mùa hè, cổ họng của chúng ta có xu hướng rất dễ viêm nhiễm, cơ quan hô hấp cũng...
                                </p>
                            </span>
                        </div>
                        <div class="child_news_other">
                            <a href="https://nhansamthinhphat.com/sieu-sale-giua-nam-thai-cuc-sam-daedong-mua-1-tang-1.html"
                                title="SIÊU SALE giữa năm - Thái cực sâm Daedong mua 1 tặng 1"><img class="lazy"
                                    src="https://nhansamthinhphat.com/storage/article/2022-06-08/banner-bot-thai-cuc-sam-daedong-qnwkwetfnpkq-120x80.jpg"
                                    alt="SIÊU SALE giữa năm - Thái cực sâm Daedong mua 1 tặng 1"
                                    style="display: block; user-select: auto;"></a>
                            <span class="summary_news_other">
                                <a href="https://nhansamthinhphat.com/sieu-sale-giua-nam-thai-cuc-sam-daedong-mua-1-tang-1.html"
                                    title="SIÊU SALE giữa năm - Thái cực sâm Daedong mua 1 tặng 1">SIÊU SALE giữa năm - Thái
                                    cực sâm Daedong mua 1 tặng 1</a>
                                <p>Từ nay đến hết 12/6/2022, khi quý khách mua 1 hộp Bột thái cực sâm Daedong 3 lọ x 100g...
                                </p>
                            </span>
                        </div>
                    </div> --}}
                    <div class="box_other_product">
                        <div class="comment_danhgia_v1"> <i class="icon-cungloai"></i><span>Gợi ý sản phẩm</span> </div>
                        <div class="list_product_home_cate clearfix">

                            @foreach ($mainBlog->products as $product)
                                @include('site.layout.product')
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

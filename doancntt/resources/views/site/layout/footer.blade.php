<div class="wrapper_full wrapper_full_blue">
    <div class="wrapper_full_1">
        <div class="banner_home1">
            <div class="child_tichluy">
                <div class="icon_policy">
                    <i class="icon-tichluydiemthuong"></i>
                </div>
                <span>
                    <a href="javascript:;" rel="nofollow">Nhiều chương trình giảm giá hấp dẫn</a>
                    <p>
                        Tích lũy mã giảm giá thường xuyên được cung cấp ưu đãi
                    </p>
                </span>
            </div>
            <div class="child_tichluy">
                <div class="icon_policy"><i class="icon-freeship"></i></div>
                <span>
                    <a href="javascript:;" rel="nofollow">Free ship toàn quốc</a>
                    <p>Áp dụng cho đơn hàng trên 500.000 vnđ</p>
                </span>
            </div>
            <div class="child_tichluy">
                <div class="icon_policy"><i class="icon-nhieuquatang"></i></div>
                <span>
                    <a href="javascript:;" rel="nofollow">Nhiều quà tặng hấp dẫn</a>
                    <p>Xem quà tặng kèm trong chi tiết của mỗi sản phẩm</p>
                </span>
            </div>
            <div class="child_tichluy child_tichluy_last">
                <div class="icon_policy">
                    <i class="icon-chatluongvauytin"></i>
                </div>
                <span>
                    <a href="javascript:;" rel="nofollow">Chất lượng và uy tín</a>
                    <p>Đảm bảo hàng thật chính hãng</p>
                </span>
            </div>
        </div>
    </div>
</div>

<footer>
    <div id="footer">
        <div class="footer">
            <div class="left_footer">
                <div class="logo_ft logo_pc">
                    @php
                        $logo = $headerData['company']->logo;
                    @endphp
                    <a href="{{ route('site.home') }}">
                        <img src="{{ asset("storage/uploads/$logo") }}" alt="{{ $headerData['company']->name }}"
                            width="200" height="200">
                    </a>
                </div>
                <div class="text_add_company">
                    <div class="text_add_ft">
                        <span class="icon_ft icon-diachi"> </span>
                        <span class="text_right_ft">
                            {{ $headerData['company']->housenumber_street . ', ' . $headerData['company']->ward->name . ', ' . $headerData['company']->ward->district->name . ', ' . $headerData['company']->ward->district->province->name }}
                            <span class="view_address_map"><a href="{{ $headerData['company']->map_url }}"
                                    target="_blank" style="color: #ff0"><i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i>
                                    Xem bản đồ chỉ đường tại đây</a></span>
                        </span>
                    </div>
                    <div class="text_add_ft">
                        <span class="icon_ft icon-hotline2"> </span>
                        <span class="text_right_ft">
                            <p>Tel: {{ $headerData['company']->advise_phone }}</p>
                            <p>Hotline: <b>{{ $headerData['company']->hotline }}</b></p>
                        </span>
                    </div>
                    <div class="text_add_ft">
                        <span class="icon_ft icon-email"> </span>
                        <span class="text_right_ft">
                            <p>Website: {{ $headerData['company']->website }}</p>
                            <p>Email: {{ $headerData['company']->email }}</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="right_footer">
                <div class="email_letter_social">
                    <div class="social">
                        <p>Kết nối với chúng tôi</p>
                        <div class="footer_mangxh">
                            <a style="" class="secoial_icon icon-google" target="_blank"
                                href="{{ $headerData['company']->facebook_url }}"></a>
                            <a class="secoial_icon icon-facebook" target="_blank"
                                href="{{ $headerData['company']->facebook_url }}"></a>
                            <a class="secoial_icon icon-twitter" target="_blank"
                                href="{{ $headerData['company']->facebook_url }}"></a>
                            <a class="secoial_icon icon-youtube" target="_blank"
                                href="{{ $headerData['company']->facebook_url }}"></a>
                        </div>
                    </div>
                </div>
                <div class="menu_cate_footer">
                    <div class="cate_menu_khachhang">
                        <div class="title_cate_ft">
                            <p>Hỗ trợ khách hàng</p>
                            <b></b>
                        </div>
                        <ul class="menu_footer_ul_kh">
                            <li>
                                <a href="{{ route('site.buyingTutorial') }}" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                    hàng</a>
                            </li>
                            <li>
                                <a href="{{ route('site.orderMethod') }}" title="Phương thức đặt hàng">Phương thức
                                    đặt
                                    hàng</a>
                            </li>
                            <li>
                                <a href="{{ route('site.salePolicy') }}" title="Chính sách vận chuyển hàng">Chính
                                    sách bán hàng</a>
                            </li>
                            <li>
                                <a href="{{ route('site.returnPolicy') }}" title="Chính sách đổi trả">Chính sách đổi
                                    trả
                                    hàng</a>
                            </li>
                            <li>
                                <a href="{{ route('site.transportMethod') }}" title="Điều khoản miễn trừ">Phương thức
                                    vận
                                    chuyển</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cate_menu_product_ft">
                        <div class="title_cate_ft">
                            <p>Sản phẩm</p>
                            <b></b>
                        </div>
                        <ul class="menu_footer_ul_sp">
                            @php
                                $sum = 1;
                            @endphp
                            @foreach ($headerData['parentCategories'] as $parentCategory)
                                @php
                                    if ($sum > 12) {
                                        break;
                                    }
                                    $count = 1;
                                @endphp
                                @foreach ($parentCategory->subCategories as $subCategory)
                                    @php
                                        if ($count > 4) {
                                            break;
                                        }
                                    @endphp
                                    <li>
                                        <a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                            title="{{ $subCategory->name }}">{{ $subCategory->name }}</a>
                                    </li>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                                @php
                                    $sum++;
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                    <div class="cate_menu_account_ft">
                        <div class="title_cate_ft">
                            <p>Trang Facebok</p>
                            <b></b>
                        </div>
                        <div class="title_cate_ft">
                            {!! $headerData['company']->facebook !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer1">
        <div class="footer">
            <p>
                Copyright © 2022 {{ $headerData['company']->name }} - All rights reserved
            </p>
        </div>
    </div>
    <div class="clear"></div>
</footer>

<script src="{{ asset('template/site/js/all.desktop0a46.js') }}"></script>
<script src="{{ asset('template/site/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('template/site/vendor/cloud-zoom/cloud-zoom.1.0.2.min.js') }}"></script>
<script src="{{ asset('template/site/js/modernizr.js') }}"></script>
<script src="{{ asset('template/site/js/script_1.js') }}"></script>
{{-- <script src="{{ asset('template/site/vendor/jquery-3.5.1.min.js') }}"></script> --}}
<script src="{{ asset('template/site/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('template/site/vendor/popper.min.js') }}"></script>
<script src="{{ asset('template/site/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/site/js/all.mobile.js') }}"></script>
<script src="{{ asset('template/site/js/public.js') }}"></script>
<script src="{{ asset('template/site/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('template/site/js/rater.min.js') }}"></script>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=621019949225450&autoLogAppEvents=1"
nonce="J5TIjTtb"></script>

<script type="text/javascript">
    jssor_1_slider_init = function() {
        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            },
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        /*#region responsive code begin*/
        var MAX_WIDTH = 3000;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
                var expectedWidth = Math.min(
                    MAX_WIDTH || containerWidth,
                    containerWidth
                );
                jssor_1_slider.$ScaleWidth(expectedWidth);
            } else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(
            window,
            "orientationchange",
            ScaleSlider
        ); /*#endregion responsive code end*/
    };
    jssor_1_slider_init();
</script>

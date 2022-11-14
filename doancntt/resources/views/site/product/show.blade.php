@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list">
                    <a href="{{ route('site.home') }}" class="fist_menu_cate_a">
                        Trang chủ
                    </a>
                    <a href="{{ route('site.parentCategory.index', [$mainProduct->subCategory->parentCategory->slug]) }}"
                        class="fist_menu_cate_a">{{ $mainProduct->subCategory->parentCategory->name }}
                    </a>
                    <a href="{{ route('site.subCategory.index', [$mainProduct->subCategory->parentCategory->slug, $mainProduct->subCategory->slug]) }}"
                        class="fist_menu_cate_a">{{ $mainProduct->subCategory->name }}
                    </a>
                    <a href="{{ route('site.product.show', [$mainProduct->slug]) }}">
                        {{ ucwords(mb_strtolower($mainProduct->name, 'UTF-8')) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            <div class="left_detail_pr">
                <div class="img_detail_name clearfix">
                    {{-- <div class="img_detail_name_1">
                        <div class="zoom-small-image">
                            @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0 && $mainProduct->price > $mainProduct->sale_price)
                                @php
                                    $discount_percentage = 0;
                                    $discount_percentage = (($mainProduct->price - $mainProduct->sale_price) * 100) / $mainProduct->price;
                                @endphp
                                <p class="price_percent_detail">
                                    -{{ ceil($discount_percentage) }}%</p>
                            @endif

                            <div id="wrap" style="top: 0px; z-index: 9999; position: relative; user-select: auto;">
                                <a href="{{ asset("storage/uploads/$mainProduct->featured_image") }}" class="cloud-zoom"
                                    id="zoom1" rel="adjustX:10, adjustY:-4" onclick="return false"
                                    style="position: relative; display: block; user-select: auto;"> <img
                                        src="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                        alt="{{ $mainProduct->name }}" style="display: block; user-select: auto;"> </a>
                                <div class="mousetrap"
                                    style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 368px; height: 368px; left: 0px; top: 0px; cursor: move; user-select: auto;">
                                </div>
                            </div>

                        </div>
                        <div style="width: 50%; margin-top: 8px; margin-bottom: 5px;" id="carouselExampleIndicators"
                            class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                                @if (count($mainProduct->images) > 0)
                                    @for ($i = 1; $i <= count($mainProduct->images) + 1; $i++)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}">
                                        </li>
                                    @endfor
                                @endif
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                        alt="{{ $mainProduct->name }}">
                                </div>

                                @foreach ($mainProduct->images as $image)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset("storage/uploads/$image->name") }}"
                                            alt="{{ $image->product->name }}">
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div> --}}
                    <div class="img_detail_name_1">
                        <div class="zoom-small-image">
                            @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0 && $mainProduct->price > $mainProduct->sale_price)
                                @php
                                    $discount_percentage = 0;
                                    $discount_percentage = (($mainProduct->price - $mainProduct->sale_price) * 100) / $mainProduct->price;
                                @endphp
                                <p class="price_percent_detail">
                                    -{{ ceil($discount_percentage) }}%</p>
                            @endif

                            <div id="wrap" style="top: 0px; z-index: 9999; position: relative; user-select: auto;">
                                <a href="{{ asset("storage/uploads/$mainProduct->featured_image") }}" class="cloud-zoom"
                                    id="zoom1" rel="adjustX:10, adjustY:-4" onclick="return false"
                                    style="position: relative; display: block; user-select: auto;"> <img
                                        src="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                        alt="{{ $mainProduct->name }}" style="display: block; user-select: auto;"> </a>
                                <div class="mousetrap"
                                    style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 368px; height: 368px; left: 0px; top: 0px; cursor: move; user-select: auto;">
                                </div>
                            </div>

                        </div>
                        <div id="carousel" class="slider_carousel">
                            <div class="slide">
                                <a href="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                    class="cloud-zoom-gallery active"
                                    rel="useZoom: 'zoom1', smallImage: '{{ asset("storage/uploads/$mainProduct->featured_image") }}'"
                                    onclick="return false"> <img
                                        src="{{ asset("storage/uploads/$mainProduct->featured_image") }}">
                                </a>
                            </div>
                            @foreach ($mainProduct->images as $image)
                                <div class="slide">
                                    <a href="{{ asset("storage/uploads/$image->name") }}" class="cloud-zoom-gallery active"
                                        rel="useZoom: 'zoom1', smallImage: '{{ asset("storage/uploads/$image->name") }}'"
                                        onclick="return false"> <img src="{{ asset("storage/uploads/$image->name") }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="img_detail_name_2">
                        <h1 class="h2_name">{{ ucwords(mb_strtolower($mainProduct->name, 'UTF-8')) }}</h1>
                        <div class="brand_name_detail clearfix" style="margin: 0;margin-top: 5px">
                            <div class="brand_name_detail_elm">Mã sản phẩm:&nbsp;<strong style="color: #fca00f;">
                                    {{ $mainProduct->id }}</strong>
                            </div>
                            <div class="brand_name_detail_elm">Barcode:&nbsp;<strong style="color: #fca00f;">
                                    {{ $mainProduct->barcode }}</strong>
                            </div>
                            <div class="brand_name_detail_elm">Tình
                                trạng:&nbsp;<strong
                                    style="color: #fca00f;">{{ $mainProduct->inventory_qty ? 'Còn hàng' : '' }}</strong>
                            </div>
                        </div>
                        <div class="brand_name_detail clearfix" style="margin: 0">
                            <div class="brand_name_detail_elm">Thương hiệu:&nbsp;<strong style="color: #fca00f;">
                                    {{ $mainProduct->brand->name }}</strong>
                            </div>

                            <div class="brand_name_detail_elm">Shop:&nbsp;<strong style="color: #fca00f;">
                                    {{ $company->name }}</strong>
                            </div>

                            <div class="brand_name_detail_elm">Trọng lượng:&nbsp;<strong style="color: #fca00f;">
                                    {{ $mainProduct->weight ?? 'chưa xác định' }}</strong>
                            </div>

                            <div class="brand_name_detail_elm">Xuất xứ:&nbsp;<strong style="color: #fca00f;">
                                    {{ $mainProduct->made_by }}</strong>
                            </div>
                        </div>
                        <div class="product-detail-summary">

                            {!! $mainProduct->description !!}

                        </div>
                        <div class="price_wp_xx">
                            <div class="price_wp_xx_left">
                                @if ($mainProduct->price == 0 && $mainProduct->sale_price == 0)
                                    <div class="price_news_detail clearfix" style="padding-top:10px">
                                        <b>Giá</b>
                                        <p>Liên hệ</p>
                                    </div>
                                @else
                                    @if ($mainProduct->price > $mainProduct->sale_price)
                                        <div class="price_old_detail clearfix">
                                            <b>Giá gốc:</b>
                                            <p>{{ number_format($mainProduct->price) }} VND</p>
                                        </div>
                                        <div class="price_news_detail clearfix" style="padding-top:10px">
                                            <b>Giá giảm</b>
                                            <p>{{ number_format($mainProduct->sale_price) }} VND</p>
                                        </div>
                                    @else
                                        <div class="price_news_detail clearfix" style="padding-top:10px">
                                            <b>Giá giảm</b>
                                            <p>{{ number_format($mainProduct->sale_price) }} VND</p>
                                        </div>
                                    @endif
                                @endif


                                <div class="wp_text_number clearfix">
                                    <p class="text_number_1">Số lượng:</p>
                                    <div class="number_cart1"> <span class="icon-soluongtru img_click_minus"></span>
                                        <input type="text" name="qty" class="number_cart_input" value="1"> <span
                                            class="icon-soluongcong img_click_plus"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="price_wp_xx_cart clearfix">
                                <div class="card_by"> <a href="javascript:void(0)" class="card_by1">
                                        <form id="add_to_cart_form" action="{{ route('site.cart.create') }}"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                            <input type="hidden" name="qty_in_cart" value="1">


                                            @if ($mainProduct->inventory_qty > 0)
                                                @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                                                    <button type="submit"><i class="icon-muahang"
                                                            style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                                        <b>Mua ngay</b>
                                                    </button>
                                                @else
                                                    <button type="button" style="background-color: orange;"><i
                                                            class="icon-muahang"
                                                            style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                                        <b>Liên hệ</b>
                                                    </button>
                                                @endif
                                            @else
                                                <button type="button" style="background-color: red;"><i
                                                        class="icon-muahang"
                                                        style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                                    <b>Hết Hàng</b>
                                                </button>
                                            @endif

                                        </form>
                                    </a> </div>

                            </div>
                            <div class="note_logistic clearfix">
                                <div class="logo_logistic"> <span class="icon-logistics"></span> </div>
                                <div class="note_logistic_info">{!! $company->shipping_commit !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="container">
                    <ul class="faq">
                        <li class="q rotate1" data-id="1"><img src="{{ asset('storage/uploads/row_2_blue.png') }}"
                                class="rotate">
                            &nbsp; Chi tiết sản phẩm</li>
                        <li class="a" id="1" style="display: block;">
                            <div class="faq_content">
                                {!! $mainProduct->description_details !!}
                            </div>
                        </li>
                        <li class="q rotate1" data-id="2"><img src="{{ asset('storage/uploads/row_2_blue.png') }}"
                                class="rotate">
                            &nbsp; Hướng dẫn sử dụng</li>
                        <li class="a" id="2" style="display: block;">
                            <div class="faq_content">
                                {!! $mainProduct->use_tutorial !!}
                            </div>
                        </li>
                        <li class="q rotate1" data-id="a-brand"><img src="{{ asset('storage/uploads/row_2_blue.png') }}"
                                class="rotate">
                            &nbsp; Thương hiệu {{ $mainProduct->brand->name }}</li>
                        <li class="a" id="a-brand" style="display: block;">
                            <div class="faq_content">
                                {!! $mainProduct->brand->description !!}
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="container_cart">
                    <form id="add_to_cart_form" action="{{ route('site.cart.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                        <input type="hidden" name="qty_in_cart" value="1">

                        @if ($mainProduct->inventory_qty > 0)
                            @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                                <button type="submit" style="width: 30%;">Mua ngay</button>
                            @else
                                <button type="button" style="width: 30%; background-color: orange;">Liên hệ</button>
                            @endif
                        @else
                            <button type="button" style="width: 30%; background-color: red;">Hết hàng</button>
                        @endif
                    </form>
                </div>
                <div class="comment_danhgia_v1"> <i class="icon-hoidap"></i><span>Đánh giá sản phẩm</span></div>
                <div id="box-rating">
                    <div class="form_comment clearfix">
                        <form id="frm-product-rating" method="POST" action="{{ route('site.comment.store') }}">
                            @csrf
                            @method('POST')
                            <div class="select_rating"> <span class="rating_title">Chọn đánh giá của bạn</span>
                                <section class="container_rating" id="container_rating">
                                    <div class="rate"
                                        style="width: 148px; height: 49px; position: relative; cursor: default; user-select: auto;">
                                        <div class="rate-base-layer"
                                            style="width: 100%; height: 49px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap; user-select: auto;">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <div class="rate-select-layer"
                                            style="width: 0%; height: 49px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap; user-select: auto;">
                                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                        </div>
                                        <div class="rate-hover-layer"
                                            style="width: 0%; height: 49px; overflow: hidden; position: absolute; top: 0px; display: none; white-space: nowrap; user-select: auto;">
                                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                            <div class="fgroup clearfix">
                                <div class="fgroup_left">
                                    <textarea name="review_body" rows="5"
                                        placeholder="Mời bạn chia sẻ thêm một số cảm nhận ... (tối thiểu 40 ký tự)"></textarea>
                                </div>
                                <div class="fgroup_center"> <input type="text" name="review_name"
                                        placeholder="Họ tên (bắt buộc)" value=""> <input type="email"
                                        name="review_email" placeholder="Email (không bắt buộc)" value=""> </div>
                                <div class="fgroup_right"> <input type="text" name="review_phone"
                                        placeholder="Số điện thoại (bắt buộc)" value="">
                                    <input type="submit" name="review_submit" value="Gửi đánh giá">
                                </div>
                            </div>
                            <div id="rating-message" class="w3-right-align"></div> <input type="hidden" name="rating"
                                value="0">
                        </form>
                    </div>
                    <div class="box_comment">
                        <div class="rating-star ">
                            <div class="rating-left">
                                <div class="rating-top">
                                    <p class="point">5.0</p>
                                    <div class="list-star"> <i class="icondetail-ratestar"></i> <i
                                            class="icondetail-ratestar"></i> <i class="icondetail-ratestar"></i> <i
                                            class="icondetail-ratestar"></i> <i class="icondetail-ratestar"></i> </div> <a
                                        href="javascript:;" rel="”nofollow”"
                                        class="rating-total">{{ App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 5.0) }}
                                        đánh giá</a>
                                </div>
                                @php
                                    $numberOfFiveStar = App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 5.0);
                                    $numberOfFourStar = App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 4.0);
                                    $numberOfThreeStar = App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 3.0);
                                    $numberOfTwoStar = App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 2.0);
                                    $numberOfOneStar = App\Helpers\ProductHelper::countNumberOfStarInComment($mainProduct->id, 1.0);
                                    $totalStar = $numberOfFiveStar + $numberOfFourStar + $numberOfThreeStar + $numberOfTwoStar + $numberOfOneStar;

                                    $percentageOfFiveStar = $totalStar > 0 ? floor(($numberOfFiveStar * 100) / $totalStar) : 0;
                                    $percentageOfFourStar = $totalStar > 0 ? floor(($numberOfFourStar * 100) / $totalStar) : 0;
                                    $percentageOfThreeStar = $totalStar > 0 ? floor(($numberOfThreeStar * 100) / $totalStar) : 0;
                                    $percentageOfTwoStar = $totalStar > 0 ? floor(($numberOfTwoStar * 100) / $totalStar) : 0;
                                    $percentageOfOneStar = $totalStar > 0 ? floor(($numberOfOneStar * 100) / $totalStar) : 0;

                                @endphp
                                <ul class="rating-list">
                                    <li>
                                        <div class="number-star"> 5 <i class="icondetail-blackstar"></i> </div>
                                        <div class="timeline-star">
                                            <p class="timing"
                                                style="width: {{ $percentageOfFiveStar }}%; user-select: auto;"></p>
                                        </div> <a href="javascript:;" rel="nofollow"
                                            class="number-percent">{{ $percentageOfFiveStar }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star"> 4 <i class="icondetail-blackstar"></i> </div>
                                        <div class="timeline-star">
                                            <p class="timing"
                                                style="width: {{ $percentageOfFourStar }}%; user-select: auto;"></p>
                                        </div> <a href="javascript:;" rel="nofollow"
                                            class="number-percent">{{ $percentageOfFourStar }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star"> 3 <i class="icondetail-blackstar"></i> </div>
                                        <div class="timeline-star">
                                            <p class="timing"
                                                style="width: {{ $percentageOfThreeStar }}%; user-select: auto;"></p>
                                        </div>
                                        <p class="number-percent dsp">{{ $percentageOfThreeStar }}%</p>
                                    </li>
                                    <li>
                                        <div class="number-star"> 2 <i class="icondetail-blackstar"></i> </div>
                                        <div class="timeline-star">
                                            <p class="timing"
                                                style="width: {{ $percentageOfTwoStar }}%; user-select: auto;"></p>
                                        </div> <a href="javascript:;" rel="nofollow"
                                            class="number-percent">{{ $percentageOfTwoStar }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star"> 1 <i class="icondetail-blackstar"></i> </div>
                                        <div class="timeline-star">
                                            <p class="timing"
                                                style="width: {{ $percentageOfOneStar }}%; user-select: auto;"></p>
                                        </div> <a href="javascript:;" rel="nofollow"
                                            class="number-percent">{{ $percentageOfOneStar }}%</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul>
                            @foreach ($comments as $comment)
                                <li>
                                    <div class="comment_name"> <b>{{ $comment->fullname }}</b> <label class="sttB"><i
                                                class="fa fa-check-circle" aria-hidden="true"></i>Đã
                                            mua tại {{ $company->name }}</label> </div>
                                    <div class="comment_rating"> <span class="container_rating-list">
                                            <div class="rate_list" data-rate-value="{{ $comment->star }}"
                                                style="width: 104px; height: 35px; position: relative; cursor: default; user-select: auto;">
                                            </div>
                                        </span> <span class="container_content">{{ $comment->description }}</span>
                                        @php
                                            $difference = App\Helpers\ProductHelper::calculateDifferenceBetweenTwoDays($comment->created_date);
                                        @endphp
                                        <div class="item-click">
                                            <a href="javascript:void(0)" rel="nofollow"
                                                class="click-use">{{ $difference }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- @php
                    $mainProduct = $mainProduct;
                @endphp --}}

                <div class="box_other_product">
                    <div class="comment_danhgia_v1"> <i class="icon-cungloai"></i><span>Sản phẩm cùng loại</span> </div>
                    <div class="list_product_home_cate clearfix">

                        @foreach ($relatedProducts as $product)
                            @include('site.layout.product')
                        @endforeach

                    </div>
                </div>

            </div>
            <div class="right_detail_pr">
                <div class="box_support_policy">
                    <div class="box_support_policy_header clearfix">
                        <div class="bsp_phone_icon"> <i class="icon-hotline2"></i> </div>
                        <div class="bsp_phone_title">
                            <p>Hỗ trợ tư vấn</p>
                            <div class="bsp_phone_hotline">Hotline: <a
                                    href="tel:{{ $company->hotline }}">{{ $company->hotline }}</a></div>
                        </div>
                    </div>
                    <div class="box_support_policy_midle">
                        <h4 class="h4_1">{{ ucwords(mb_strtolower($mainProduct->name, 'UTF-8')) }}</h4>
                        <div class="price_show_1 clearfix">

                            @if ($mainProduct->price == 0 && $mainProduct->sale_price == 0)
                                <p class="price_show_1_1">Liên hệ</p>
                            @else
                                <p class="price_show_1_1">{{ number_format($mainProduct->sale_price) }} VND</p>
                            @endif

                        </div>
                        <div class="wp_text_number clearfix">
                            <p class="text_number_1">Số lượng:</p>
                            <div class="number_cart1 number_cart2"> <span class="icon-soluongtru img_click_minus"></span>
                                <input type="text" name="qty" class="number_cart_input" value="1"> <span
                                    class="icon-soluongcong img_click_plus"></span>
                            </div>
                        </div>
                        <div class="card_by2 clearfix wp_text_number1">
                            <form id="add_to_cart_form" action="{{ route('site.cart.create') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                <input type="hidden" name="qty_in_cart" value="1">


                                @if ($mainProduct->inventory_qty > 0)
                                    @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                                        <button type="submit"><i class="icon-muahang"
                                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                            <b>Mua ngay</b>
                                        </button>
                                    @else
                                        <button type="button" style="background-color: orange;"><i class="icon-muahang"
                                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                            <b>Liên hệ</b>
                                        </button>
                                    @endif
                                @else
                                    <button type="button" style="background-color: red;"><i class="icon-muahang"
                                            style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                        <b>Hết Hàng</b>
                                    </button>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
                <div class="box_tuvan_detail">
                    <div class="name_scrool">
                        <h4 class="h4_1">{{ ucwords(mb_strtolower($mainProduct->name, 'UTF-8')) }}</h4>
                        <div class="price_show_1 clearfix">

                            @if ($mainProduct->price == 0 && $mainProduct->sale_price == 0)
                                <p class="price_show_1_1">Liên hệ</p>
                            @else
                                <p class="price_show_1_1">{{ number_format($mainProduct->sale_price) }} VND</p>
                            @endif

                        </div>
                        <div class="wp_text_number clearfix">
                            <p class="text_number_1">Số lượng:</p>
                            <div class="number_cart1 number_cart2"> <span class="icon-soluongtru img_click_minus"></span>
                                <input type="text" name="qty" class="number_cart_input" value="1"> <span
                                    class="icon-soluongcong img_click_plus"></span>
                            </div>
                        </div>
                        <div class="card_by2 clearfix wp_text_number1">
                            <form id="add_to_cart_form" action="{{ route('site.cart.create') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                <input type="hidden" name="qty_in_cart" value="1">


                                @if ($mainProduct->inventory_qty > 0)
                                    @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                                        <button type="submit"><i class="icon-muahang"
                                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                            <b>Mua ngay</b>
                                        </button>
                                    @else
                                        <button type="button" style="background-color: orange;"><i class="icon-muahang"
                                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                            <b>Liên hệ</b>
                                        </button>
                                    @endif
                                @else
                                    <button type="button" style="background-color: red;"><i class="icon-muahang"
                                            style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                                        <b>Hết Hàng</b>
                                    </button>
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="box_support_policy box_support_policy_fixed">
                        <div class="box_support_policy_header clearfix">
                            <div class="bsp_phone_icon"> <i class="icon-hotline2"></i> </div>
                            <div class="bsp_phone_title">
                                <p>Hỗ trợ tư vấn</p>
                                <div class="bsp_phone_hotline">Hotline:&nbsp;<a
                                        href="tel:{{ $company->hotline }}">{{ $company->hotline }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="fixed_cart_phone">
        <div class="fixed_phone">
            <a href="tel:{{ $company->hotline }}">
                <div class="box-phone-effect" style="float:left;position: relative;">
                    <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon">
                        <div class="coccoc-alo-ph-circle-fill"></div>
                    </div>
                    <i class="icon-sodienthoai"></i>
                </div>
                <span>{{ $company->hotline }}</span>
            </a>
        </div>
        <div class="fixed_cart">
            <form id="add_to_cart_form" action="{{ route('site.cart.create') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                <input type="hidden" name="qty_in_cart" value="1">


                @if ($mainProduct->inventory_qty > 0)
                    @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                        <button type="submit"><i class="icon-muahang"
                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                            <b>Mua ngay</b>
                        </button>
                    @else
                        <button type="button" style="background-color: orange;"><i class="icon-muahang"
                                style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                            <b>Liên hệ</b>
                        </button>
                    @endif
                @else
                    <button type="button" style="background-color: red;"><i class="icon-muahang"
                            style="height: 100%; width:20%; font-size:24px; margin-right:18px;"></i>
                        <b>Hết Hàng</b>
                    </button>
                @endif
            </form>
        </div>
    </div>
    <div class="clear"></div>


@endsection

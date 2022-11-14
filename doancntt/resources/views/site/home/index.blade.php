@extends('site.layout.main')

@section('content')
    @include('site.layout.alert')
    <div id="block-slider" class="clearfix">
        <div class="block-slider-inner">
            <div id="jssor_1"
                style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      position: relative;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: 0 auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      top: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      left: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 1600px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      height: 560px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      overflow: hidden;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      visibility: hidden;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
                <div data-u="loading" class="jssorl-009-spin"
                    style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        top: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        left: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        text-align: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        background-color: rgba(0, 0, 0, 0.7);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ">
                    <img style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          margin-top: -19px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          position: relative;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          top: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          width: 38px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          height: 38px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                        src="{{ asset('storage/uploads/spin.svg') }}" />
                </div>
                <div data-u="slides"
                    style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        cursor: default;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        position: relative;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        top: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        left: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        width: 1600px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        height: 560px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        overflow: hidden;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ">
                    @foreach ($banners as $banner)
                        <div>
                            <a href="{{ $banner->url }}" target="_blank"><img data-u="image"
                                    data-src="{{ asset("storage/uploads/$banner->thumb") }}"
                                    data-alt="{{ $banner->name }}" class="lazy" style="object-fit: cover;
                                                    object-position: center;" /></a>
                        </div>
                    @endforeach
                </div>
                <div data-u="navigator" class="jssorb032" style="position: absolute; bottom: 12px; right: 12px"
                    data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16000 16000"
                            style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <div data-u="arrowleft" class="jssora051" style="width: 65px; height: 65px; top: 0px; left: 25px"
                    data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000"
                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width: 65px; height: 65px; top: 0px; right: 25px"
                    data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000"
                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div id="box_category_home">

        @foreach ($parentCategories as $parentCategory)
            <div class="box_category_home">
                <div class="box_category_home_title clearfix">
                    <div class="box_category_home_name">
                        <div class="category_home_name">
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">
                                <p><i class="fa-solid fa-copyright"></i></p>
                                <span>{{ $parentCategory->name }}</span>
                            </a>
                            <b></b>
                        </div>
                    </div>
                    <div class="box_category_home_brand">
                        <div class="box_category_keyword_hot clearfix">
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($parentCategory->subCategories as $subCategory)
                                @php
                                    if ($count > 6) {
                                        break;
                                    }
                                @endphp
                                <div class="box_category_keyword_hot_elm">
                                    <a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                        target="_blank" style="background: rgb(30, 146, 59);"><img
                                            style="border-radius: 50% 50%;"
                                            src="{{ asset("storage/uploads/$subCategory->icon_image") }}" alt=""
                                            width="64" height="64">
                                        <strong style="margin-top: 6px;">{{ $subCategory->name }}</strong>
                                    </a>
                                </div>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="box_category_home_product clearfix">
                    <div class="box_category_cate_name">
                        <ul class="ul_list_recieve_text">
                            @foreach ($parentCategory->subCategories as $subCategory)
                                <li class="c_parent">
                                    <a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                        title="{{ $subCategory->name }}">{{ $subCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="box_category_cate_banner_pr">
                        <div class="box_category_cate_banner_pr_left">
                            @if (!empty($parentCategory->introduction_id))
                                <div class="box_category_cate_pr clearfix">
                                    <div class="row">
                                        <div class="col-lg-4 pt-2">
                                            @php
                                                $represented_image = $parentCategory->introduction->represented_image;
                                            @endphp
                                            <img src="{{ asset("storage/uploads/$represented_image") }}"
                                                alt="{{ $parentCategory->introduction->title }}">
                                        </div>
                                        <div class="col-lg-8">
                                            {!! $parentCategory->introduction->description !!}
                                            <p><strong><a
                                                        href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}"
                                                        style="display: inline-block;">Tìm hiểu thêm...</a>
                                                </strong></p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="box_category_cate_pr clearfix">
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($parentCategory->subCategories as $subCategory)
                                        @php
                                            if ($count > 3) {
                                                break;
                                            }
                                            $product = [];
                                            $category_id = $subCategory->id;
                                            $product = App\Helpers\HomeHelper::getOneProductBySubCategoryIdOrderByCreatedDateAsc($category_id);
                                        @endphp
                                        @if (!empty($product))
                                            <div class="box_product_v1">
                                                <div class="box_product_v1_img">
                                                    <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                        title="{{ $product->name }}">
                                                        <img data-src="{{ asset("storage/uploads/$product->featured_image") }}"
                                                            data-alt="{{ $product->name }}" class="lazy" />
                                                    </a>
                                                </div>
                                                <div class="box_product_v1_name_element">
                                                    <div class="box_product_v1_name">
                                                        <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                                        <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                            title="{{ $product->name }}"
                                                            class="name_layout_list">{{ $product->name }}</a>
                                                    </div>
                                                    <div class="box_product_v1_price clearfix">
                                                        <div class="box_product_v1_price_num">
                                                            @if ($product->price == 0 && $product->sale_price == 0)
                                                                <p class="price_v1">Liên hệ</p>
                                                            @else
                                                                @if ($product->price > $product->sale_price)
                                                                    <p class="price_v1_old">
                                                                        {{ number_format($product->price) }}
                                                                        VND</p>
                                                                    <p class="price_v1">
                                                                        {{ number_format($product->sale_price) }} VND</p>
                                                                @else
                                                                    <p class="price_v1">
                                                                        {{ number_format($product->sale_price) }} VND</p>
                                                                @endif
                                                            @endif
                                                        </div>
                                                        <div class="box_product_v1_price_percent">
                                                            <form action="{{ route('site.cart.create') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $product->id }}">
                                                                <input type="hidden" name="qty_in_cart" value="1">

                                                                @if ($product->inventory_qty > 0)
                                                                    @if ($product->price != 0 && $product->sale_price != 0)
                                                                        <button class="btn_cart" type="submit"><b>Mua
                                                                                ngay</b>
                                                                        </button>
                                                                    @else
                                                                        <button class="btn_cart" type="button"
                                                                            style="background-color: orange;"><b>Liên
                                                                                hệ</b>
                                                                        </button>
                                                                    @endif
                                                                @else
                                                                    <button class="btn_cart" type="button"
                                                                        style="background-color: red;"><b>Hết hàng</b>
                                                                    </button>
                                                                @endif
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($product->price != 0 && $product->sale_price != 0 && $product->price > $product->sale_price)
                                                    @php
                                                        $discount_percentage = 0;
                                                        $discount_percentage = (($product->price - $product->sale_price) * 100) / $product->price;
                                                    @endphp
                                                    <p class="price_percent">-{{ ceil($discount_percentage) }}%</p>
                                                @endif
                                            </div>
                                        @else
                                            @php
                                                $count--;
                                            @endphp
                                        @endif

                                        @php
                                            $count++;
                                        @endphp
                                    @endforeach
                                </div>
                            @endif

                            <div class="box_category_cate_pr clearfix">
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($parentCategory->subCategories as $subCategory)
                                    @php
                                        if ($count > 3) {
                                            break;
                                        }
                                        $product = [];
                                        $category_id = $subCategory->id;
                                        $product = App\Helpers\HomeHelper::getOneProductBySubCategoryId($category_id);
                                    @endphp
                                    @if (!empty($product))
                                        <div class="box_product_v1">
                                            <div class="box_product_v1_img">
                                                <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                    title="{{ $product->name }}">
                                                    <img data-src="{{ asset("storage/uploads/$product->featured_image") }}"
                                                        data-alt="{{ $product->name }}" class="lazy" />
                                                </a>
                                            </div>
                                            <div class="box_product_v1_name_element">
                                                <div class="box_product_v1_name">
                                                    <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                        title="{{ $product->name }}">{{ $product->name }}</a>
                                                    <a href="{{ route('site.product.show', [$product->slug]) }}"
                                                        title="{{ $product->name }}"
                                                        class="name_layout_list">{{ $product->name }}</a>
                                                </div>
                                                <div class="box_product_v1_price clearfix">
                                                    <div class="box_product_v1_price_num">
                                                        @if ($product->price == null && $product->sale_price == null)
                                                            <p class="price_v1">Liên hệ</p>
                                                        @else
                                                            @if ($product->price > $product->sale_price)
                                                                <p class="price_v1_old">
                                                                    {{ number_format($product->price) }}
                                                                    VND</p>
                                                                <p class="price_v1">
                                                                    {{ number_format($product->sale_price) }} VND</p>
                                                            @else
                                                                <p class="price_v1">
                                                                    {{ number_format($product->sale_price) }} VND</p>
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div class="box_product_v1_price_percent">
                                                        <form action="{{ route('site.cart.create') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="hidden" name="qty_in_cart" value="1">

                                                            @if ($product->inventory_qty > 0)
                                                                @if ($product->price != 0 && $product->sale_price != 0)
                                                                    <button class="btn_cart" type="submit"><b>Mua
                                                                            ngay</b>
                                                                    </button>
                                                                @else
                                                                    <button class="btn_cart" type="button"
                                                                        style="background-color: orange;"><b>Liên
                                                                            hệ</b>
                                                                    </button>
                                                                @endif
                                                            @else
                                                                <button class="btn_cart" type="button"
                                                                    style="background-color: red;"><b>Hết hàng</b>
                                                                </button>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($product->price != null && $product->sale_price != null && $product->price > $product->sale_price)
                                                @php
                                                    $discount_percentage = 0;
                                                    $discount_percentage = (($product->price - $product->sale_price) * 100) / $product->price;
                                                @endphp
                                                <p class="price_percent">-{{ ceil($discount_percentage) }}%</p>
                                            @endif
                                        </div>
                                    @else
                                        @php
                                            $count--;
                                        @endphp
                                    @endif

                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </div>

                            <div class="box_category_cate_pr clearfix" style="margin-bottom: 30px;">
                                <div class="view_all_cate_parent" style="user-select: auto;"> <a
                                        href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                        style="user-select: auto;">Xem tất cả</a> </div>
                            </div>
                        </div>
                        <div class="box_category_cate_banner_pr_right">
                            @foreach ($blogs as $blog)
                                <div class="media_pr_right">
                                    <div class="media_pr_right_img">
                                        <a href="{{ route('site.blog.show', [$blog->slug]) }}"
                                            title="{{ $blog->title }}">
                                            <img data-src="{{ asset("storage/uploads/$blog->featured_image") }}"
                                                data-alt="{{ $blog->title }}" class="lazy" />
                                        </a>
                                    </div>
                                    <div class="media_pr_right_name_price">
                                        <div class="media_pr_right_name">
                                            <a href="{{ route('site.blog.show', [$blog->slug]) }}"
                                                title="{{ $blog->title }}">{{ $blog->title }}</a>
                                        </div>
                                        <div class="media_pr_right_num">
                                            <p class="price_v1 mgrt_10"><a
                                                    href="{{ route('site.blog.show', [$blog->slug]) }}">Xem
                                                    thêm...</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="box_category_cate_banner_pr_right">
                            <div class="view_all_cate_parent" style="user-select: auto;"> <a
                                    href="{{ route('site.blog.index') }}" style="user-select: auto;">Xem Tất Cả</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="wrapper_full_mb1" style="user-select: auto;">
        <div class="cate_home_mb" style="user-select: auto;">
            <p style="user-select: auto;">Danh mục sản phẩm</p>
        </div>
        <ul>
            @foreach ($parentCategories as $parentCategory)
                <li>
                    <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                        style="user-select: auto;"> <span class="icon_fonts_menu fa-solid fa-copyright"
                            style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0); user-select: auto;">
                        </span> <b style="user-select: auto;">{{ $parentCategory->name }}</b> </a>
                    <i class="fa toogle_cate_page fa-plus" aria-hidden="true" data-id="{{ $parentCategory->id }}"
                        style="user-select: auto;"></i>
                    <ul id="cate_page_{{ $parentCategory->id }}" class="ul_menu_mb_child"
                        style="user-select: auto; display: none;">
                        @foreach ($parentCategory->subCategories as $subCategory)
                            <li style="user-select: auto;"><a
                                    href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}">{{ $subCategory->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="wrapper_full wrapper_full_bg_3">

        <div class="wrapper_full_1">
            @foreach ($parentCategories as $parentCategory)
                <div class="wrapper_full_2">
                    <div class="cate_home_mb">
                        <p><a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                title="{{ $parentCategory->name }}">{{ $parentCategory->name }}</a></p>
                    </div>
                    <div class="manufacturer_small clearfix">
                        <div class="wp_select_manufacturer_small">
                            <select class="select_manufacturer_small cs-skin-border"
                                onchange="window.open(this.value,'_self');">
                                <option value="" disabled="" selected="">Loại sản phẩm</option>

                                @foreach ($parentCategory->subCategories as $subCategory)
                                    <option
                                        value="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}">
                                        {{ $subCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if (!empty($parentCategory->introduction_id))
                            <div class="row box_category_cate_banner">
                                <div class="col-lg-4 pt-2">
                                    @php
                                        $represented_image = $parentCategory->introduction->represented_image;
                                    @endphp
                                    <img src="{{ asset("storage/uploads/$represented_image") }}"
                                        alt="{{ $parentCategory->introduction->name }}">
                                </div>
                                <div class="col-lg-8">
                                    {!! $parentCategory->introduction->description !!}
                                    <p><strong><a
                                                href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}"
                                                style="display: inline-block;">Tìm hiểu thêm...</a> </strong></p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="list_product_home_cate">

                        @php
                            $count = 1;
                        @endphp
                        @foreach ($parentCategory->subCategories as $subCategory)
                            @php
                                if ($count > 8) {
                                    break;
                                }
                                $product = [];
                                $category_id = $subCategory->id;
                                $product = App\Helpers\HomeHelper::getOneProductBySubCategoryIdOrderByCreatedDateAsc($category_id);
                            @endphp
                            @if (!empty($product))
                                @include('site.layout.product')
                            @else
                                @php
                                    $count--;
                                @endphp
                            @endif

                            @php
                                $count++;
                            @endphp
                        @endforeach

                    </div>
                    <div class="wrapper_full_3">
                        <div class="btn_view_more"><a
                                href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">Xem
                                tất cả</a></div>
                    </div>
                </div>
            @endforeach

            <div class="left_support">
                <div class="left_support1">
                    <p class="title_support">Ý kiến khách hàng</p>
                    <div id="slider_comment">

                        @foreach ($consultants as $consultant)
                            <div class="slider_comment">
                                <a href="javascript:void(0)" class="a_thumb_1"><img
                                        data-src="{{ asset('storage/uploads/customer_icon_image.png') }}"
                                        data-alt="{{ $consultant->fullname }}" class="lazy" /></a>
                                <span class="wf_comment">
                                    <i class="ngay_1"></i>{{ $consultant->content }}<i
                                        class="ngay_2"></i>
                                </span>
                                <span class="wp_line_sp"> <i class="line_sp"></i></span>
                                <a href="javascript:void(0)"
                                    class="name_comment_sp mb-2">{{ $consultant->fullname }}</a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="right_support">
                <img class="bg_left lazy" data-src="{{ asset('storage/uploads/bg_left.png') }}"
                    data-alt="Hỗ trợ tư vấn" />
                <div class="right_support1">
                    <p class="title_support">Hỗ trợ tư vấn</p>
                    <p class="tuvan_sp">
                        ( Vui lòng gọi <i></i><b><a style="color: #b20505"
                                href="tel:{{ $company->hotline }}">{{ $company->hotline }}</a></b>
                        để được tư vấn trực tiếp hoặc đăng ký tư vấn )
                    </p>
                    <form id="form_support" action="{{ route('site.sendRequestConsultant') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="div_full_sp">
                            <div class="left_div_full_sp">
                                <input class="input_sp" name="fullname" type="text" placeholder="Họ và Tên" />
                            </div>
                            <div class="right_div_full_sp">
                                <input class="input_sp" name="mobile" type="text" placeholder="SĐT" />
                                <div class="clear"></div>
                                <div id="errorAdvPhone"></div>
                            </div>
                        </div>
                        <div class="div_full_sp">
                            <input type="email" class="input_sp" name="email" placeholder="Email" />
                            <div class="clear"></div>
                            <div id="errorAdvEmail"></div>
                        </div>
                        <div class="div_full_sp">
                            <div class="left_div_full_sp left_div_full_category">
                                <select name="product_type_name">
                                    <option value="">Loại sản phẩm</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        @foreach ($parentCategory->subCategories as $subCategory)
                                            <option value="{{ $subCategory->name }}">{{ $subCategory->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="div_full_sp">
                            <textarea placeholder="Nội dung" name="content"></textarea>
                        </div>
                        <div class="clear"></div>

                        <div class="col-md-12 mb-3 mt-2 p-0 send-loading" style="display: none;">

                        </div>

                        <div class="div_full_sp">
                            <input type="submit" value="Gửi" class="sm_sp" id="btn_adv_request" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection

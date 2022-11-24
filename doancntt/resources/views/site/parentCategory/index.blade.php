@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">{{ $parentCategory->name }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                @include('site.layout.leftSideBar')

                <div class="right_list_product">
                    <div class="box_cate_add">
                        <div class="cate_home_mb">
                            <p>{{ $parentCategory->name }}</p>
                        </div>
                        <div class="box_cate_news">
                            <ul>
                                @foreach ($parentCategory->subCategories as $subCategory)
                                    <li><a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                            title="{{ $subCategory->name }}">{{ $subCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @include('site.layout.arrangeFilter')
                    <div class="clear"></div>
                    <div id="box-product-info">
                        <div id="product_filter_select" style="display: none"> </div>
                        <div class="clear"></div>
                        <div id="load_product_list" class="clearfix">
                            @foreach ($parentCategory->subCategories as $subCategory)
                                @php
                                    $allProducts = App\Helpers\ProductHelper::getAllProductListBySubCategory(request(), $subCategory);
                                    $products = App\Helpers\ProductHelper::getProductListBySubCategoryHavingPagination(request(), $subCategory);
                                @endphp

                                @if (count($products) > 0)
                                    <div class="list_pr_ds">

                                        <div class="cate_arrangement_pr_list clearfix">
                                            <div class="cate_arrangement_pr_list_text">
                                                <p><a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                                        title="{{ $subCategory->name }}">{{ $subCategory->name }}</a>
                                                </p>
                                                <b></b>
                                            </div>
                                            <a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                                class="cate_view_all">Xem tất cả<i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                        </div>


                                        <div class="clear"></div>
                                        <div id="load_product_list_8" class="load_product_list clearfix">
                                            <div class="product_list_in_sub_category_id_{{ $subCategory->id }} ">
                                            </div>
                                            @foreach ($products as $product)
                                                @include('site.layout.product')
                                            @endforeach
                                            <div class="ajax_loadding"></div>
                                            <div class="clear"></div>
                                            <div id="page_cate_8">
                                                @php
                                                    $page = 1;
                                                    $item_per_page = 8;
                                                    $total = count($allProducts);
                                                    $page_number = ceil($total / $item_per_page);
                                                @endphp
                                                <div class="paging paginate-ajax-cate-child" data-id="8">
                                                    @if (count($products) > 0)
                                                        <span>Nhấn trang tiếp theo để xem thêm</span>
                                                        @php
                                                            $price_range = request()->input('price_range') ?? null;
                                                            $brand_id = request()->input('brand_id') ?? null;
                                                            $sort = request()->input('sort') ?? null;
                                                        @endphp
                                                        <ul class="pagination" role="navigation">
                                                            @for ($i = 1; $i <= $page_number; $i++)
                                                                <li class="page-item {{ (empty($page) && $i == 1) || $page == $i ? 'active' : '' }}"
                                                                    aria-current="page"><a class="page-link"
                                                                        href="javascript:void(0)"
                                                                        onclick="goToPage(this, '{{ route('site.ajax.goToPage') }}', '{{ $i }}', '{{ $subCategory->id }}', '{{ $price_range }}', '{{ $brand_id }}', '{{ $sort }}')">
                                                                        {{ $i }}</a></li>
                                                            @endfor
                                                        </ul>
                                                        {{-- @else
                                                    <span>Không có sản phẩm nào được hiển thị</span> --}}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
        </div>
    </div>
@endsection

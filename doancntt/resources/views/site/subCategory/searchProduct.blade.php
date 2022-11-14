@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list">
                    <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a>
                    <a href="{{ route('site.searchProduct') }}" class="fist_menu_cate_a">Tìm kiếm</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="left_list_product">
                    <div class="list_cate_1 background_1">
                        <div class="title_loc_search">Bộ lọc tìm kiếm</div>
                    </div>
                    <div class="trademark_price_left">
                        <div class="trademark_price_left_1" id="product_filter_element">
                            <div class="name_cate_left_1">
                                <p>Giá</p>
                                <b></b>
                            </div>
                            <ul class="ul_list_recieve_text_1" id="panel_filter_price" data-label="Giá">
                                <li>
                                    <label for="filter-less-400">
                                        <input type="radio" id="filter-less-400" name="filter-price" value="0-400000"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '0-400000']) }}"
                                            {{ request()->input('price_range') == '0-400000' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        Giá dưới 400.000đ
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-400-800">
                                        <input type="radio" id="filter-400-800" name="filter-price" value="400000-800000"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '400000-800000']) }}"
                                            {{ request()->input('price_range') == '400000-800000' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        400.000đ - 800.000đ
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-800-1200">
                                        <input type="radio" id="filter-800-1200" name="filter-price" value="800000-1200000"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '800000-1200000']) }}"
                                            {{ request()->input('price_range') == '800000-1200000' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        800.000đ - 1.200.000đ
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-1200-1600">
                                        <input type="radio" id="filter-1200-1600" name="filter-price"
                                            value="1200000-1600000"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '1200000-1600000']) }}"
                                            {{ request()->input('price_range') == '1200000-1600000' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        1.200.000đ - 1.600.000đ
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-1600-2000">
                                        <input type="radio" id="filter-1600-2000" name="filter-price"
                                            value="1600000-2000000"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '1600000-2000000']) }}"
                                            {{ request()->input('price_range') == '1600000-2000000' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        1.600.000đ - 2.000.000đ
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-greater-2000">
                                        <input type="radio" id="filter-greater-2000" name="filter-price"
                                            value="2000000-greater"
                                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '2000000-greater']) }}"
                                            {{ request()->input('price_range') == '2000000-greater' ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        Giá trên 2.000.000đ
                                    </label>
                                </li>
                            </ul>

                            <div class="list_th_scroll">
                                <div class="name_cate_left_1 click_show_left" data-id="list_th_scroll_brand">
                                    <p>Thuơng hiệu</p>
                                    <b></b>
                                </div>
                                <div class="list_th_scroll_1 mCustomScrollbar" id="list_th_scroll_brand">
                                    <ul class="list_th_scroll_ul" id="panel_filter_brand" data-label="Thuơng hiệu">

                                        @foreach ($brands as $brand)
                                            <li>
                                                {{-- <input type="checkbox" name="input_brand[]"
                                                    id="input_brand_{{ $brand->id }}" class="css-checkbox-hotel"
                                                    data-name="{{ $brand->name }}" onChange="productFilter()"
                                                    value="{{ $brand->id }}"
                                                    data-url="{{ request()->fullUrlWithQuery(['brand_id' => $brand->id]) }}"> --}}

                                                <label for="filter-{{ $brand->id }}">
                                                    <input type="radio" id="filter-{{ $brand->id }}" name="filter-brand"
                                                        value="{{ $brand->id }}"
                                                        data-url="{{ request()->fullUrlWithQuery(['brand_id' => $brand->id]) }}"
                                                        {{ request()->input('brand_id') == $brand->id ? 'checked' : '' }}>
                                                    <i class="fa"></i>
                                                    {{ $brand->name }}
                                                </label>

                                                <b>({{ count($brand->products) }})</b>
                                            </li>
                                        @endforeach
                                        <input type="hidden" name="route" value="{{ request()->fullUrlWithQuery([]) }}">
                                        {{-- <input type="hidden" name="url_filter" value="{{ route('site.ajax.productFilter') }}"> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="right_list_product">
                    <div class="cate_arrangement_pr_list cate_arrangement_pr_list_parent clearfix">
                        <div class="cate_arrangement_pr_list_text">
                            <p>Kết quả tìm kiếm</p>
                            <b></b>
                        </div>
                        @include('site.layout.arrangeFilter')
                    </div>
                    <div class="clear"></div>
                    <div id="box-product-info">
                        <div id="product_filter_select" style="display: none"> </div>
                        <div class="clear"></div>
                        <div id="load_product_list" class="clearfix">
                            <div class="list_pr_ds">
                                <div class="cate_arrangement_pr_list clearfix">

                                </div>
                                <div class="clear"></div>

                                <div id="load_product_list_8" class="load_product_list clearfix">

                                    @foreach ($productsOnePage as $product)
                                        @include('site.layout.product')
                                    @endforeach

                                    <div class="ajax_loadding"></div>
                                    <div class="clear"></div>
                                    <div id="page_cate_8">
                                        <div class="paging paginate-ajax-cate-child" data-id="8">
                                            <ul class="pagination" role="navigation">
                                                @if ($page > 1)
                                                    <li class="page-item"> <a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}"
                                                            rel="next" aria-label="&laquo; Previous">&lsaquo;</a> </li>
                                                @endif

                                                @for ($i = 1; $i <= $page_number; $i++)
                                                    <li class="page-item {{ (empty($page) && $i == 1) || $page == $i ? 'active' : '' }}"
                                                        aria-current="page"><a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">
                                                            {{ $i }}</a></li>
                                                @endfor

                                                @if ($page < $page_number && $page_number > 1)
                                                    <li class="page-item"> <a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}"
                                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a> </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

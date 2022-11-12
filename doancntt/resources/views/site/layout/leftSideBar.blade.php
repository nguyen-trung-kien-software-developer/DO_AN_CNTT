<div class="left_list_product">
    <div class="list_cate_1 background_1">
        <div class="title_loc_search">Bộ lọc tìm kiếm</div>
        <div class="name_cate_left">
            <p>{{ $parentCategory->name }}</p>
            <b></b>
        </div>
        <ul class="ul_list_recieve_text">

            @foreach ($parentCategory->subCategories as $subCategory)
                <li class="c_parent"><a
                        href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                        title="{{ $subCategory->name }}"
                        title="{{ $subCategory->name }}">{{ $subCategory->name }}<b>({{ count($subCategory->products) }})</b></a>
                </li>
            @endforeach
        </ul>
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
                        <input type="radio" id="filter-1200-1600" name="filter-price" value="1200000-1600000"
                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '1200000-1600000']) }}"
                            {{ request()->input('price_range') == '1200000-1600000' ? 'checked' : '' }}>
                        <i class="fa"></i>
                        1.200.000đ - 1.600.000đ
                    </label>
                </li>
                <li>
                    <label for="filter-1600-2000">
                        <input type="radio" id="filter-1600-2000" name="filter-price" value="1600000-2000000"
                            data-url="{{ request()->fullUrlWithQuery(['price_range' => '1600000-2000000']) }}"
                            {{ request()->input('price_range') == '1600000-2000000' ? 'checked' : '' }}>
                        <i class="fa"></i>
                        1.600.000đ - 2.000.000đ
                    </label>
                </li>
                <li>
                    <label for="filter-greater-2000">
                        <input type="radio" id="filter-greater-2000" name="filter-price" value="2000000-greater"
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

                        @foreach ($leftSideBarData->brands as $brand)
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

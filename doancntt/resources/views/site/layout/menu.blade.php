<div id="menu_home">
    <div class="menu_home clearfix">
        <div class="cate_home cate_home_one">
            <p class="cate_parent_name">Tất cả danh mục</p>
            <ul class="hide_ul_menu hide_ul_menu_cate">
                @foreach ($menuData->allParentCategories as $parentCategory)
                    <li class="menu_li_left">
                        <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                            title="{{ $parentCategory->name }}">
                            <span class="icon_fonts_menu fa-solid fa-copyright"
                                style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                            </span>
                            <b>{{ $parentCategory->name }}</b> <i class="icon_arow_1"></i>
                        </a>
                        <div class="sub_menu_left_12 sub_menu_left_12_all">
                            <div class="sub_menu_left_1_1">
                                {!! App\Helpers\MenuHelper::renderSubCategoryList($parentCategory->subCategories) !!}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="cate_home_2 cate_home_one">
            <p class="cate_parent_name_1"><a href="{{ route('site.home') }}">Trang chủ</a></p>
        </div>
        @foreach ($menuData->parentCategories as $parentCategory)
            @if ($parentCategory->id == 1)
                <div class="cate_home_1 cate_home_one featured_cate_home_1">
                    <p class="cate_parent_name_1">{{ $parentCategory->name }}</p>
                    <ul class="hide_ul_menu hide_ul_menu_cate">
                        @if (!empty($parentCategory->introduction_id))
                            <li class="menu_li_left">
                                <a href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}"
                                    title="{{ $parentCategory->introduction->title }}">
                                    <span class="icon_fonts_menu fa-solid fa-indent"
                                        style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                    </span>
                                    <b>{{ $parentCategory->introduction->title }}</b></i>
                                </a>

                            </li>
                        @endif
                        <li class="menu_li_left">
                            <a href="{{ route('site.samNuiHanQuoc') }}" title="Sâm núi Hàn Quốc">
                                <span class="icon_fonts_menu ic-nhan-sam"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                </span>
                                <b>Sâm núi Hàn Quốc</b></i>
                            </a>
                        </li>
                        <li class="menu_li_left">
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                title="Sản phẩm của {{ $parentCategory->name }}">
                                <span class="icon_fonts_menu fa-solid fa-boxes-stacked"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                </span>
                                <b>Sản phẩm của {{ $parentCategory->name }}</b>
                                <i class="icon_arow_1"></i>
                            </a>
                            <div class="sub_menu_left_12">
                                <div class="sub_menu_left_1_1">
                                    {!! App\Helpers\MenuHelper::renderSubCategoryList($parentCategory->subCategories) !!}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @php
                    continue;
                @endphp
            @endif

            @if (!empty($parentCategory->introduction_id))
                <div class="cate_home_1 cate_home_one featured_cate_home_1">
                    <p class="cate_parent_name_1">{{ $parentCategory->name }}</p>
                    <ul class="hide_ul_menu hide_ul_menu_cate">
                        <li class="menu_li_left">
                            <a href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}"
                                title="{{ $parentCategory->introduction->title }}">
                                <span class="icon_fonts_menu fa-solid fa-indent"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                </span>
                                <b>{{ $parentCategory->introduction->title }}</b></i>
                            </a>

                        </li>
                        <li class="menu_li_left">
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                title="Thương hiệu {{ $parentCategory->name }}">
                                <span class="icon_fonts_menu fa-solid fa-boxes-stacked"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                </span>
                                <b>Sản Phẩm của {{ $parentCategory->name }}</b> <i class="icon_arow_1"></i>
                            </a>
                            <div class="sub_menu_left_12">
                                <div class="sub_menu_left_1_1">
                                    {!! App\Helpers\MenuHelper::renderSubCategoryList($parentCategory->subCategories) !!}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            @else
                <div class="cate_home_1 cate_home_one">
                    <p class="cate_parent_name_1">{{ $parentCategory->name }}</p>
                    <ul class="hide_ul_menu hide_ul_menu_cate">
                        @foreach ($parentCategory->subCategories as $subCategory)
                            <li class="menu_li_left">
                                <a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                    title="{{ $subCategory->name }}">
                                    <span class="icon_fonts_menu fa-solid fa-box-archive"
                                        style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                    </span>
                                    <b>{{ $subCategory->name }}</b>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach

        <div class="cate_home_2 cate_home_one">
            <p class="cate_parent_name_1"><a href="{{ route('site.blog.index') }}">Tin tức</a></p>
        </div>
        <div class="cate_home_2 cate_home_one">
            <p class="cate_parent_name_1"><a href="{{ route('site.branch.index') }}">Hệ thống</a></p>
        </div>
        <div class="cate_home_2 cate_home_one">
            <p class="cate_parent_name_1"><a href="{{ route('site.contact.index') }}">Liên hệ</a></p>
        </div>

    </div>
</div>
